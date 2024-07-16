/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.util.List;
/**
 *
 * @author Alain
 */
public interface CRUD {
    public List listar();
    public Cliente listarID(int id);
    public String add(String nombre, String direccion, int estado);
    public String edit(int id, String nombre, String direccion, int estado);
    public Cliente delete(int id);
}
