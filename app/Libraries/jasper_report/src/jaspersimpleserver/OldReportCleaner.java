/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package jaspersimpleserver;

import java.io.File;
import java.util.TimerTask;

/**
 *
 * @author agung
 */
public class OldReportCleaner extends TimerTask {

    long m_AllowableFileAge = 3600 * 24; // 1 Day
    boolean m_fAbort = false;
    
    public void abort() {
        m_fAbort = true;        
    }
    
    public void run() {
        
        m_fAbort = false;
        
        try {
            
            File d = new File(Main.g_Config.getString("out.dir"));
            if(!d.isDirectory()) return;
            
            long now = System.currentTimeMillis();
            File[] files = d.listFiles();
            for(int i=0; i<files.length; i++) {
                if(files[i].isDirectory()) continue;
                long age = ( now - files[i].lastModified() ) / 1000; // seconds
                if(age > m_AllowableFileAge) {
                    try {
                        files[i].delete();
                    } catch(Exception ee) {}
                }
                if(m_fAbort) break;
            }
            
        } catch(Exception e) {
            
        }
    }

}
