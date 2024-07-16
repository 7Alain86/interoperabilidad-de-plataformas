/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package webservicecli;

import java.util.List;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import modelo.Cliente;
import modelo.ClienteDAO;

/**
 *
 * @author Alain
 */
@WebService(serviceName = "Servicios")
public class Servicios {

    /**
     * This is a sample web service operation
     */
    ClienteDAO dao = new ClienteDAO();
    @WebMethod(operationName = "listar")
    public List<Cliente> listar() {
        List datos = dao.listar();
        return datos;
    }
    
    @WebMethod(operationName = "agregar")
    public String agregar(@WebParam(name = "nombre") String nombre, @WebParam(name = 
    "direccion") String direccion, @WebParam(name = "estado") int estado) {
        String datos = dao.add(nombre, direccion, estado);
        return datos;
    }
    
    @WebMethod(operationName = "listarID")
    public Cliente listarID(@WebParam(name = "id") int id) {
        Cliente cliente = dao.listarID(id);
        return cliente;
    }
        
    @WebMethod(operationName = "actualizar")
    public String actualizar(@WebParam(name = "id") int id, @WebParam(name = "nombre") String 
        nombre, @WebParam(name = "direccion") String direccion, @WebParam(name = "estado") int 
        estado) {
            String datos = dao.edit(id, nombre, direccion, estado);
            return datos;
    }
    
    @WebMethod(operationName = "Eliminar")
    public Cliente Eliminar(@WebParam(name = "id") int id) {
        Cliente c=dao.delete(id);
        return c;
    }

}
