/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package jaspersimpleserver;

import java.io.FileInputStream;
import java.io.FileReader;
import java.io.Reader;
import java.net.InetSocketAddress;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.PropertyResourceBundle;
import java.util.ResourceBundle;

import java.util.StringTokenizer;
import java.util.Timer;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author agung
 */
public class Main implements Runnable {

    public static boolean g_fTrace = false;
    static int g_DefaultPort = 9999;
    public static ResourceBundle g_Config = null; //ResourceBundle.getBundle("JasperSimpleServer");
    public static String g_LogFile = "../../log/log_jasper.txt";
    
    boolean m_fKeepRunning = true;
    static int m_iClientCount = 0;
    ServerSocket m_theSocket = null;
    InetSocketAddress m_ServerAddress = null;

    OldReportCleaner m_ReportCleaner = new OldReportCleaner();
    
    String m_PropertyFileName = "";
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Main theApp = new Main();
        if(!theApp.initialize(args)) {
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, "Initialization fail", theApp.m_ServerAddress);
            return;
        }
        ReportGenerator.bootStrap();
        Thread theAppThread = new Thread(theApp);
        theAppThread.start();
    }
    
    public boolean parseHostPortOption(String hostPort) {
        
        String h = hostPort.trim();
        
        if(h.length()==0) {
            m_ServerAddress = new InetSocketAddress(g_DefaultPort);
            return true;
        }
        
        if (h.matches("^[0-9]+$")) { // Only Port is defined
            m_ServerAddress = new InetSocketAddress(Integer.parseInt(h));
        } else if (h.indexOf(':') < 0) { // Only Host defined
            m_ServerAddress = new InetSocketAddress(h, g_DefaultPort);
        } else { // Assume host:port format
            StringTokenizer st = new StringTokenizer(h, ":");
            String host = st.nextToken();
            String strPort = st.nextToken().trim();
            if (!strPort.matches("^[0-9]$")) {
                Logger.getLogger(Main.class.getName()).log(Level.SEVERE, "Invalid argument", h);
                return false;
            }
            m_ServerAddress = new InetSocketAddress(host, Integer.parseInt(strPort));
        }

        if (m_ServerAddress.isUnresolved()) {
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, "Can not resolve address", h);
            return false;
        }
        
        return true;
    }

    public boolean initialize(String[] args) {
        
        try {
            String hostPort = "";
            m_PropertyFileName = "./JasperSimpleServer.properties";
            
            for (int i = 0; i < args.length; i++) {
                if (args[i].startsWith("-")) {
                    char opt = args[i].charAt(1);
                    switch (opt) {
                        case 'd':
                            g_fTrace = true;
                        break;
                        case 'p':
                            i=i+1;
                            m_PropertyFileName = args[i];
                        break;
                        case 'l':
                            i=i+1;
                            g_LogFile = args[i];
                        break;
                    }
                } else {
                    hostPort = args[i];
                }
            }

            if (!parseHostPortOption(hostPort)) {
                return false;
            }
            
            g_Config = new PropertyResourceBundle(new FileInputStream(m_PropertyFileName));
            
        } catch(Exception e) {
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, e);
            return false;
        }
        
        return true;
    }
    
    public void stop() {
        m_fKeepRunning = false;
    }
    
    public void run() {
        
        try {
            m_theSocket = new ServerSocket();
            m_theSocket.bind(m_ServerAddress);
        } catch(Exception exc1) { 
            Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, exc1);
            return; 
        }

        Timer tm = new Timer("OldReportCleaner");
        tm.schedule(m_ReportCleaner, 1000, 3600000);
        
        while(m_fKeepRunning) {
            
            try {
                Socket newSocket = m_theSocket.accept();
                if(newSocket!=null) {
        
                    if(g_fTrace) System.out.println("Rx Connection: " + newSocket.getInetAddress().getHostName());
                    m_iClientCount++;
                    Thread handler = new Thread(new ClientHandler(newSocket, m_iClientCount));
                    handler.start();
                }
            } catch(Exception exc2) { 
                Logger.getLogger(Main.class.getName()).log(Level.SEVERE, null, exc2);
                break; 
            }
            
        }
        
        m_ReportCleaner.abort();
        m_ReportCleaner.cancel();
    }

}
