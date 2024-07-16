/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rcp_servidor;

import javax.swing.JOptionPane;
import org.apache.xmlrpc.WebServer;

/**
 * 
 *
 * @author Alain
 */
public class Servidor {

    public static void main(String[] args) {
        try {
            JOptionPane.showMessageDialog(null,"Iniciando el servidor");
            WebServer server = new WebServer(8080);
            Operaciones operacion = new Operaciones();

            server.addHandler("miServidorRpc",operacion);

            server.start();
            JOptionPane.showMessageDialog(null,"Servidor en línea"); 
            } catch (Exception e){
            JOptionPane.showMessageDialog(null,"Error"+e.getMessage()); 
            }

    }
    
}
