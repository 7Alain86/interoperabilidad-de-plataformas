/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rcp_servidor;

/**
 *
 * @author Alain
 */
public class Operaciones {
    public String suma(String a, String b){
        return String.valueOf(Integer.parseInt(a) + Integer.parseInt(b));
    }
    
    public String resta(String a, String b){
        return String.valueOf(Integer.parseInt(a) - Integer.parseInt(b));
    }
    
    public String multiplicacion(String a, String b){
        return String.valueOf(Integer.parseInt(a) * Integer.parseInt(b));
    }
    
    public String division(String a, String b){
        return String.valueOf(Integer.parseInt(a) / Integer.parseInt(b));
    }
    
    public String ecuacionp(String a, String b, String c){
        //-b +(b^2-4ac)/2a
        int discriminante = (Integer.parseInt(b) * Integer.parseInt(b)) - (4 * Integer.parseInt(a) * Integer.parseInt(c));
        if (discriminante == 0) {
            return "La ecuación no tiene valores reales";
        } else {
            return String.valueOf((-Integer.parseInt(b) + Math.sqrt(discriminante))/ (2 * Integer.parseInt(a)));
        }
    }
        
    public String ecuacionm(String a, String b, String c){
        //-b -(b^2-4ac)/2a
        int discriminante = (Integer.parseInt(b) * Integer.parseInt(b)) - (4 * Integer.parseInt(a) * Integer.parseInt(c));
        if (discriminante == 0) {
            return "La ecuación no tiene valores reales";
        } else {
            return String.valueOf((-Integer.parseInt(b) - Math.sqrt(discriminante))/ (2 * Integer.parseInt(a)));
        }    
    }
}
