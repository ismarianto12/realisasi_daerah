package jaspersimpleserver;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.Socket;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
import java.util.StringTokenizer;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author agung
 */
public class ClientHandler implements Runnable {

    Socket s = null;
    int m_iMyID = 0;
    int m_iReportCount = 0;
    
    ClientHandler(Socket newSocket) {
        s = newSocket;
    }

    ClientHandler(Socket newSocket, int iID) {
        m_iMyID = iID;
        s = newSocket;
    }

    public void run() {

        BufferedReader br = null;
        PrintWriter bw = null;
        OutputStream os = null;

        try {
            br = new BufferedReader(new InputStreamReader(s.getInputStream()));
            os = s.getOutputStream();
            bw = new PrintWriter(os);

            if(Main.g_fTrace) System.out.println("Ready...");

            boolean fContinue = true;
            String cmd = "";

            ReportGenerator repGen = new ReportGenerator();

            while (fContinue) {
                cmd = br.readLine();
                if(Main.g_fTrace) System.out.println("Rx Cmd: " + cmd);
                if (cmd.equalsIgnoreCase("DONE")) {
                    bw.println("OK");
                    bw.flush();
                    break;
                } else if (cmd.startsWith("REPGEN")) {
                    // Command Format: REPGEN;DB-CONN-PARAMS;JASPERDIR;JASPERBASE;TARGET;JASPER-PARAMS
                    // TARGET: PDF-FILE, PDF-STREAM, HTML-FILE, HTML-STREAM, XLS-FILE, XLS-STREAM
                    StringTokenizer st = new StringTokenizer(cmd.substring(7), ";");
                    String sToken = "";
                    boolean isUsingFile = true;
                    
                    if(st.countTokens()>=5) {
                        
                        //sToken = st.nextToken(); // Throw away
                        String connParams   = st.nextToken().trim();
                        String jasperDir    = st.nextToken().trim();
                        String jasperBase   = st.nextToken().trim();
                        String jasperTarget = st.nextToken().trim();
                        String jasperParams = st.nextToken().trim();
                        String outFileName = "";

                        int iJasperTarget = ReportGenerator.getFormatID(jasperTarget);

                        if(Main.g_fTrace) System.out.println("Client Handler ID#" + Integer.toString(m_iMyID) + " REPGEN Params: [" + 
                                connParams + "] - [" +
                                jasperDir + "] - [" +
                                jasperBase + "] - [" +
                                jasperTarget + "] - [" +
                                jasperParams + "] - [" +
                                Integer.toString(iJasperTarget) + "]");
                        
                        if(iJasperTarget!=ReportGenerator.FORMAT_UNKNOWN) {
                            
                            if(Main.g_fTrace) System.out.println("Generating Report!!!");

                            if(!jasperTarget.endsWith("STREAM")) {
                                m_iReportCount++;
                                outFileName = "REP-" + Integer.toString(m_iMyID) + "-" + Integer.toString(m_iReportCount);
                                if(jasperTarget.startsWith("PDF")) outFileName += ".pdf"; 
                                else if(jasperTarget.startsWith("HTML")) outFileName += ".html";
                                else if(jasperTarget.startsWith("XLS")) outFileName += ".xls";

                                byte[] res = repGen.run(connParams, jasperDir, jasperBase, iJasperTarget, jasperParams, outFileName);
                                sToken = new String(res);
                                if(!sToken.equalsIgnoreCase("<FAIL>")) {
                                    sToken = "<OK:" + sToken.trim() + ">";
                                }
                            }
                            else {
                                byte[] resBytes = repGen.run(connParams, jasperDir, jasperBase, iJasperTarget, jasperParams, outFileName);
                                if(resBytes[0]=='<' && resBytes[1]=='F' && resBytes[2]=='A' && 
                                   resBytes[3]=='I' && resBytes[4]=='L' && resBytes[5]=='>') { // <FAIL>
                                    sToken = new String(resBytes);
                                }
                                else {
                                    isUsingFile = false;
                                    sToken = "<OK:" + Integer.toString(resBytes.length) + ">";
                                    if(Main.g_fTrace) System.out.println(sToken);
                                    bw.println(sToken); bw.flush();
                                    os.write(resBytes); os.flush();
                                    //char[] data = new char[pdfBytes.length];
                                    //System.arraycopy(pdfBytes, 0, data, 0, data.length);
                                    //bw.write(data); bw.flush();
                                }
                            }
                        }
                        else sToken = "<FAIL>";
                    }
                    else sToken = "<FAIL>";
                            
                    if(isUsingFile) {
                        bw.println(sToken);
                        bw.flush();
                    }
                    
                    if(Main.g_fTrace) System.out.println("Client Handler ID#" + Integer.toString(m_iMyID) + " REPGEN Result: " + sToken);
                }
                else {
                    bw.println("<FAIL>");
                    bw.flush();
                }
            }

        } catch (IOException ex) {
            Logger.getLogger(ClientHandler.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            try {
                br.close();
                if (bw != null) {
                    bw.close();
                }
            } catch (IOException ex) {
                Logger.getLogger(ClientHandler.class.getName()).log(Level.SEVERE, null, ex);
            }

            if(Main.g_fTrace) System.out.println("Client Handler ID#" + Integer.toString(m_iMyID) + " exiting.");
            return;
        }

    }
}
