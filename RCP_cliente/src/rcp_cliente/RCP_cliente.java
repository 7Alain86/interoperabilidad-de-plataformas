/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rcp_cliente;

import java.util.Vector;
import javax.swing.JOptionPane;
import org.apache.xmlrpc.XmlRpcClient;

/**
 *
 * @author Alain
 */
public class RCP_cliente {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String x="", y="", z="";
            Object resultado;

            try { 
                XmlRpcClient client = new XmlRpcClient("http://10.0.2.15:8080");
                Vector<String> parametros = new Vector<String>();
                JOptionPane.showMessageDialog(null,"El cliente se ha conectado");
                while(true){
                    String menu = JOptionPane.showInputDialog(null,"Suma de dos numeros\n"
                    + "1. Suma \n"
                    + "2. Resta \n"
                    + "3. Multiplicacion\n"
                    + "4. Division\n"
                    + "5. Ecuacion grado 2\n"
                    + "6. Salir\n", "Cliente Servidor RPC" + "", JOptionPane.DEFAULT_OPTION);
                    switch(menu){
                    case "1":
                        x=JOptionPane.showInputDialog(null,"Primer numero","Suma",JOptionPane.QUESTION_MESSAGE);
                        y=JOptionPane.showInputDialog(null,"Segundo numero","Suma",JOptionPane.QUESTION_MESSAGE);
                        parametros.addElement(x);
                        parametros.addElement(y);
                        resultado = client.execute("miServidorRpc.suma",parametros);
                        JOptionPane.showMessageDialog(null,"La suma es "+resultado);
                        parametros.clear();
                    break;
                    
                    case "2":
                        x=JOptionPane.showInputDialog(null,"Primer numero","Resta",JOptionPane.QUESTION_MESSAGE);
                        y=JOptionPane.showInputDialog(null,"Segundo numero","Resta",JOptionPane.QUESTION_MESSAGE);
                        parametros.addElement(x);
                        parametros.addElement(y);
                        resultado = client.execute("miServidorRpc.resta", parametros);
                        JOptionPane.showMessageDialog(null,"La resta es "+resultado);
                        parametros.clear();
                        break;
                    
                    case "3":
                        x=JOptionPane.showInputDialog(null,"Primer numero","Multiplicacion",JOptionPane.QUESTION_MESSAGE);
                        y=JOptionPane.showInputDialog(null,"Segundo numero","Multiplicacion",JOptionPane.QUESTION_MESSAGE);
                        parametros.addElement(x);
                        parametros.addElement(y);
                        resultado = client.execute("miServidorRpc.multiplicacion", parametros);
                        JOptionPane.showMessageDialog(null,"La multiplicacion es "+resultado);
                        parametros.clear();
                        break;
                        
                    case "4":
                        x=JOptionPane.showInputDialog(null,"Primer numero","Division",JOptionPane.QUESTION_MESSAGE);
                        y=JOptionPane.showInputDialog(null,"Segundo numero","Division",JOptionPane.QUESTION_MESSAGE);
                        parametros.addElement(x);
                        parametros.addElement(y);
                        resultado = client.execute("miServidorRpc.division", parametros);
                        JOptionPane.showMessageDialog(null,"La division es "+resultado);
                        parametros.clear();
                        break;
                        
                    case "5":
                        x=JOptionPane.showInputDialog(null,"Coef. A","Ecuacion",JOptionPane.QUESTION_MESSAGE);
                        y=JOptionPane.showInputDialog(null,"Coef. B","Ecuacion",JOptionPane.QUESTION_MESSAGE);
                        z=JOptionPane.showInputDialog(null,"Coef. C","Ecuacion",JOptionPane.QUESTION_MESSAGE);
                        parametros.addElement(x);
                        parametros.addElement(y);
                        parametros.addElement(z);
                        resultado = client.execute("miServidorRpc.ecuacionp", parametros);
                        JOptionPane.showMessageDialog(null,"La solución para positivo es "+resultado);
                        resultado = client.execute("miServidorRpc.ecuacionm", parametros);
                        JOptionPane.showMessageDialog(null,"La solución para negativo es "+resultado);
                        parametros.clear();
                        break;
                    
                    case "6":
                    JOptionPane.showMessageDialog(null,"Saliendo",null,JOptionPane.WARNING_MESSAGE);
                    System.exit(0);
                    break;
                    }
                }
            }
            catch (Exception e){
            JOptionPane.showMessageDialog(null,"Error: "+e.getMessage()); 
            }

    }
    
}
