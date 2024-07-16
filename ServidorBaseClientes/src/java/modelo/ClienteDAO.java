/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.sql.PreparedStatement;
import java.sql.Connection;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;


/**
 *
 * @author Alain
 */
public class ClienteDAO implements CRUD {

    @Override
    public Cliente listarID(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public String add(String nombre, String direccion, int estado) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public String edit(int id, String nombre, String direccion, int estado) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Cliente delete(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    PreparedStatement ps;
    ResultSet rs;
    Connection con;
    Conexion conex=new Conexion();
    int res;
    String msg;
    Cliente c=new Cliente();

    @Override
    public List listar() {
        List<Cliente> datos=new ArrayList<>();
        String sql="select * from clientes";
        try {
            con = conex.getConnection();
            ps=(PreparedStatement) con.prepareStatement(sql);
            rs=ps.executeQuery();
            while (rs.next()) { 
                Cliente c= new Cliente();
                c.setId(rs.getInt("id"));
                c.setNombre(rs.getString("nombre"));
                c.setDireccion(rs.getString("direccion"));
                c.setEstado(rs.getInt("estado"));
                datos.add(c);
            }

    } catch (Exception e) {
    }
        return datos;
    }

    
}
