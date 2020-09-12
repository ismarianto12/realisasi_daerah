/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package jaspersimpleserver;

import java.io.ByteArrayOutputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.io.FileNotFoundException;
import java.lang.reflect.Constructor;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Date;

import java.util.StringTokenizer;
import java.util.logging.Level;
import java.util.logging.Logger;
import net.sf.jasperreports.engine.JRException;
import net.sf.jasperreports.engine.JRExporterParameter;
import net.sf.jasperreports.engine.JRParameter;
import net.sf.jasperreports.engine.JasperCompileManager;
import net.sf.jasperreports.engine.JasperExportManager;
import net.sf.jasperreports.engine.JasperFillManager;
import net.sf.jasperreports.engine.JasperPrint;
import net.sf.jasperreports.engine.JasperPrintManager;
import net.sf.jasperreports.engine.JasperReport;
import net.sf.jasperreports.engine.JasperRunManager;
import net.sf.jasperreports.engine.export.JExcelApiExporter;
import net.sf.jasperreports.engine.export.JRCsvExporter;
import net.sf.jasperreports.engine.export.JRHtmlExporter;
import net.sf.jasperreports.engine.export.JRHtmlExporterParameter;
import net.sf.jasperreports.engine.export.JRRtfExporter;
import net.sf.jasperreports.engine.export.JRXlsExporter;
import net.sf.jasperreports.engine.export.JRXlsExporterParameter;
import net.sf.jasperreports.engine.export.oasis.JROdtExporter;
import net.sf.jasperreports.engine.util.JRLoader;

/**
 *
 * @author agung
 */
public class ReportGenerator {

    public static final int FORMAT_UNKNOWN = 0;
    public static final int PDF_FILE    = 1;
    public static final int PDF_STREAM  = 2;
    public static final int HTML_STREAM = 3;
    public static final int HTML_FILE   = 4;
    public static final int XLS_STREAM  = 5;
    public static final int XLS_FILE    = 6;
    
    static HashMap m_FormatLookup = new HashMap();
    static {
        m_FormatLookup.put("PDF-FILE",    new Integer(PDF_FILE));
        m_FormatLookup.put("PDF-STREAM",  new Integer(PDF_STREAM));
        m_FormatLookup.put("HTML-STREAM", new Integer(HTML_STREAM));
        m_FormatLookup.put("HTML-FILE",   new Integer(HTML_FILE));
        m_FormatLookup.put("XLS-STREAM",  new Integer(XLS_STREAM));
        m_FormatLookup.put("XLS-FILE",    new Integer(XLS_FILE));
    }
    
    public static int getFormatID(String formatName) {
        Integer id = (Integer)m_FormatLookup.get(formatName);
        if(id==null) return FORMAT_UNKNOWN;
        return id.intValue();
    }

    public static void bootStrap() {
        try {
            Map parameters = new HashMap();
            JasperRunManager.runReportToPdfFile("BootStrap.jasper", "BootStrap.pdf", parameters);
            if(Main.g_fTrace) System.out.println("Jasper Report Bootstrap...");
        } catch (JRException e) {
            e.printStackTrace();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    ByteArrayOutputStream generateXLS(String connParams, String jasperFile, Map parameters) throws JRException, ClassNotFoundException, SQLException {
        File sourceFile = new File(jasperFile);
        JasperReport jasperReport = (JasperReport)JRLoader.loadObject(sourceFile);
        JasperPrint  jasperPrint  = JasperFillManager.fillReport(jasperReport, parameters, getConnection(connParams));

        ByteArrayOutputStream xlsBuffer = new ByteArrayOutputStream();        
        JRXlsExporter         jXlsExp = new JRXlsExporter();
        jXlsExp.setParameter(JRXlsExporterParameter.JASPER_PRINT, jasperPrint);
        jXlsExp.setParameter(JRXlsExporterParameter.OUTPUT_STREAM, xlsBuffer);
        jXlsExp.setParameter(JRXlsExporterParameter.SHEET_NAMES, new String[]{"Sheet1", "Sheet2"});
        jXlsExp.exportReport();

        //return JasperRunManager.runReportToHtmlFile(jasperFile, parameters, getConnection()).getBytes();
        //return new String(pdfBytes);
        return xlsBuffer;        
    }
    
    public byte[] run(String connParams, String jasperDir, String jasperBase, int iJasperTarget, String params, Object out) {
        try {
            {
                //Preparing parameters
                Map parameters = generateParameters(jasperBase, params);
                
                //String jasperFile = Main.g_Config.getString("jasper.dir") + "/" + jasperBase + ".jasper";
                String jasperFile = jasperDir + "/" + jasperBase + ".jasper";
                File fJasper = new File(jasperFile);
                if(!fJasper.exists()) { // Try to compile from jrxml file
                    //String jrxmlFile = Main.g_Config.getString("jasper.dir") + "/" + jasperBase + ".jrxml";
                    String jrxmlFile = jasperDir + "/" + jasperBase + ".jrxml";
                    File fJrxml = new File(jrxmlFile);
                    if(!fJrxml.exists()) return "<FAIL>".getBytes();
                    JasperCompileManager.compileReportToFile(jrxmlFile, jasperFile);
                }
                if(Main.g_fTrace) System.out.println("Using File: " + jasperFile);                

                switch (iJasperTarget) {
                    case PDF_FILE:
                    {
                        String outFilePath = Main.g_Config.getString("out.dir") + "/" + (String)out;
                        JasperRunManager.runReportToPdfFile(jasperFile, outFilePath, parameters, getConnection(connParams));
                        return outFilePath.getBytes();
                    }
                    case HTML_FILE:
                    {
                        String outFilePath = Main.g_Config.getString("out.dir") + "/" + (String)out;
                        JasperRunManager.runReportToHtmlFile(jasperFile, outFilePath, parameters, getConnection(connParams));
                        return outFilePath.getBytes();
                    }
                    case XLS_FILE:
                    {
                        String outFilePath = Main.g_Config.getString("out.dir") + "/" + (String)out;
                        OutputStream ouputStream = new FileOutputStream(new File(outFilePath));
                        ouputStream.write(generateXLS(connParams, jasperFile, parameters).toByteArray());
                        ouputStream.flush();
                        ouputStream.close();
                        return outFilePath.getBytes();
                    }
                    case PDF_STREAM:
                    {                        
                        return JasperRunManager.runReportToPdf(jasperFile, parameters, getConnection(connParams));
                        //return new String(pdfBytes);
                    }
                    case HTML_STREAM:
                    {
		        File sourceFile = new File(jasperFile);
 		        JasperReport jasperReport = (JasperReport)JRLoader.loadObject(sourceFile);
                        JasperPrint  jasperPrint  = JasperFillManager.fillReport(jasperReport, parameters, getConnection(connParams));
                        
                        StringBuffer htmlBuffer = new StringBuffer();
                        JRHtmlExporter jHtmlExp = new JRHtmlExporter();
                        jHtmlExp.setParameter(JRHtmlExporterParameter.JASPER_PRINT, jasperPrint);
                        jHtmlExp.setParameter(JRHtmlExporterParameter.OUTPUT_STRING_BUFFER, htmlBuffer);
                        jHtmlExp.exportReport();
                        
                        //return JasperRunManager.runReportToHtmlFile(jasperFile, parameters, getConnection()).getBytes();
                        //return new String(pdfBytes);
                        return htmlBuffer.toString().getBytes();
                    }
                    case XLS_STREAM:
                    {
                        return generateXLS(connParams, jasperFile, parameters).toByteArray();
                    }
                }
                //System.err.println("PDF running time : " + (System.currentTimeMillis() - start));
                
            }
        } catch (JRException e) {
            e.printStackTrace();
            try {
                FileOutputStream fos = new FileOutputStream(Main.g_LogFile, true);
                PrintWriter pw = new PrintWriter(fos, true);
                pw.println("");
                pw.println(new Date() + "  =========  " + jasperBase + "  ======== ");     
                e.printStackTrace(pw);
                fos.close();
                pw.close();
            } catch (FileNotFoundException ef) {
                ef.printStackTrace();
            } catch (Exception ef) {
                ef.printStackTrace();
            }
        } catch (Exception e) {
             //e.printStackTrace();
            try {
                FileOutputStream fos = new FileOutputStream(Main.g_LogFile, true);
                PrintWriter pw = new PrintWriter(fos, true);
                pw.println("");
                pw.println(new Date() + "  =========  " + jasperBase + "  ======== ");
                e.printStackTrace(pw);
                fos.close();
                pw.close();
            } catch (FileNotFoundException ef) {
                ef.printStackTrace();
            } catch (Exception ef) {
                ef.printStackTrace();
            }
        }
        
        return "<FAIL>".getBytes();
    }

    private Map generateParameters(String jasperBase, String params) {
        Map parameters = new HashMap();
        ReportParamMapper rpm = ReportParamMapperManager.getMapper(jasperBase);

        StringTokenizer st = new StringTokenizer(params, "&");
        while(st.hasMoreTokens()) {
            String paramPair = st.nextToken();
            StringTokenizer st2 = new StringTokenizer(paramPair, "=");
            try {
                String key = st2.nextToken();
                String val = st2.nextToken();

                if(rpm!=null) rpm.mapParams(parameters, key, val);
                else parameters.put(key, val);
                
            } catch(Exception e) {}
        }
        
        return parameters;
    }
    
    private Connection getConnection(String connParams) throws ClassNotFoundException, SQLException {

        Map<String, String> parameters = new HashMap<String, String>();

        StringTokenizer st = new StringTokenizer(connParams, "&");
        while(st.hasMoreTokens()) {
            String paramPair = st.nextToken();
            StringTokenizer st2 = new StringTokenizer(paramPair, "=");
            try {
                String key = st2.nextToken();
                String val = st2.nextToken();

                parameters.put(key, val);
                
                
            } catch(Exception e) {}
        }
        
        String driver = parameters.get("db.driver");
        String connectString = parameters.get("db.connect");
        String user = parameters.get("db.user");
        String password = parameters.get("db.password");
        /*
        String driver = Main.g_Config.getString("db.driver");
        String connectString = Main.g_Config.getString("db.connect");
        String user = Main.g_Config.getString("db.user");
        String password = Main.g_Config.getString("db.password");
        */
        Class.forName(driver);
        Connection conn = DriverManager.getConnection(connectString, user, password);
        return conn;
    }
}
