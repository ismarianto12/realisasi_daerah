
import java.util.Map;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author agung
 */
public class ReportParamMapper_Test1 implements jaspersimpleserver.ReportParamMapper {

    public void mapParams(Map map, String key, String val) {
        if(key.equalsIgnoreCase("id")) {

            key = "WhereClause";
            try {
                int iParam = Integer.parseInt(val);
                if(iParam<1 || iParam>4) val = "";
                else val = " WHERE kd_jnspelayanan = '0" + val.trim() + "'";
            } catch(NumberFormatException nfe) { val = ""; }
            map.put(key, val);
        }
    }

}
