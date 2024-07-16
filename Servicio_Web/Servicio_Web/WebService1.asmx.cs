using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

namespace Servicio_Web
{
    /// <summary>
    /// Descripción breve de WebService1
    /// </summary>
    [WebService(Namespace = "http://alainchacon.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

        [WebMethod]
        public string HelloWorld()
        {
            return "Hola a todos";
        }

        [WebMethod]
        public double PonerNumeros(double valor1, double valor2)
        {
            return valor1 + valor2;
        }

        [WebMethod]
        public double MayorDeTres(double valor1, double valor2, double valor3)
        {
            if (valor1 > valor2 && valor1 > valor3)
            {
                return (valor1);
            } else
            {
                if (valor2 > valor1 && valor2 > valor3)
                {
                    return (valor2);
                }
                else
                {
                    return (valor3);
                }
            }
        } 

        [WebMethod]
        public double IvaProducto(double valorProd)
        {
            return (Math.Round(valorProd * 0.15, 2));
        }
    }
}
