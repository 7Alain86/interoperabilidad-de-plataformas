<%-- 
    Document   : index
    Created on : 20/05/2024, 15:09:12
    Author     : Alain
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        
            <%-- start web service invocation --%><hr/>
    <%
    try {
	paqueteservice.WebServicePractica_Service service = new paqueteservice.WebServicePractica_Service();
	paqueteservice.WebServicePractica port = service.getWebServicePracticaPort();
	 // TODO initialize WS operation arguments here
	java.lang.String name = request.getParameter("saludo");
        // TODO process result here
        java.lang.String result = port.hello(name);
        out.println("Result = "+result);
	// TODO process result here
        
        java.lang.String side = request.getParameter("lado");
        double sideVal = Double.parseDouble(side);
        String resultado = Double.toString(port.perimetro(sideVal));
        out.println("Perimetro = " + resultado);
    } catch (Exception ex) {
	// TODO handle custom exceptions here
    }
    %>
    <%-- end web service invocation --%><hr/>

    <form>
        <input type="text" name="saludo" value="" />
        <input type="submit" value="enviar" />
        
        <input type="text" name="lado" value="" />
        <input type="submit" value="enviar" />
        
    </form>
        
    </body>
</html>
