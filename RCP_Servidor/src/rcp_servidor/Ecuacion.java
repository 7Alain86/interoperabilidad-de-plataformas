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
public class Ecuacion {
    public String ecuacionp(String a, String b, String c){
        //-b +-(b^2-4ac)/2a
        return String.valueOf((-Integer.parseInt(b) + (Integer.parseInt(b))^2 - 4 * (Integer.parseInt(a)*Integer.parseInt(c)))/2*Integer.parseInt(a));
    }
    public String ecuacionm(String a, String b, String c){
        //-b +-(b^2-4ac)/2a
        return String.valueOf((-Integer.parseInt(b) - (Integer.parseInt(b))^2 - 4 * (Integer.parseInt(a)*Integer.parseInt(c)))/2*Integer.parseInt(a));
    }
}
