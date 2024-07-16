/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;
public class Cliente {
 int id;
 String nombre;
 String direccion;
 int estado;
 public Cliente() {
 }
 public Cliente(int id, String nombre, String direccion, int estado) {
 this.id = id;
 this.nombre = nombre;
 this.direccion = direccion;
 this.estado = estado;
 }
 public int getId() {
 return id;
 }
 public void setId(int id) {
 this.id = id;
 }
 public String getNombre() {
 return nombre;
 }
 public void setNombre(String nombre) {
 this.nombre = nombre;
 }
 public String getDireccion() {
 return direccion;
 }
 public void setDireccion(String direccion) {
 this.direccion = direccion;
 }
 public int getEstado() {
 return estado;
 }
 public void setEstado(int estado) {
 this.estado = estado;
 }
 
}