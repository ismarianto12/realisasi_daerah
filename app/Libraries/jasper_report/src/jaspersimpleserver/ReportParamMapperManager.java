/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package jaspersimpleserver;

import java.lang.reflect.Constructor;
import java.util.HashMap;
import java.util.Map;

/**
 *
 * @author agung
 */
public class ReportParamMapperManager {
    static Map m_ReportParamMapperMap = new HashMap();

    public static synchronized void clearMap() {
        m_ReportParamMapperMap.clear();
    }
    
    public static synchronized ReportParamMapper getMapper(String jasperBase) {

        ReportParamMapper rpm = null;
        if((rpm = (ReportParamMapper)m_ReportParamMapperMap.get(jasperBase))!=null)
            return rpm;
        
        String reportParamsMapperName = "ReportParamMapper_" + jasperBase;
        try {
            Class cpm = Class.forName(reportParamsMapperName);
            Constructor[] cs = cpm.getDeclaredConstructors();
            if (cs.length > 0) {
                rpm = (ReportParamMapper) cs[0].newInstance();
                m_ReportParamMapperMap.put(jasperBase, rpm);
            }
        } catch (Exception ee) {}
        
        return rpm;
    }
    
}
