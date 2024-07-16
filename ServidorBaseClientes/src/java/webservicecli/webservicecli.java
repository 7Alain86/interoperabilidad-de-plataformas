/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package webservicecli;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import java.util.List;
import modelo.Cliente;
import modelo.ClienteDAO;

/**
 *
 * @author Alain
 */
@WebService(serviceName = "webservicecli")
public class webservicecli {

    /**
     * This is a sample web service operation
     */
    ClienteDAO dao = new ClienteDAO();
    @WebMethod(operationName = "listar")
    public List<Cliente> listar(){
        List datos = dao.listar();
        return datos;
    }
        
}
