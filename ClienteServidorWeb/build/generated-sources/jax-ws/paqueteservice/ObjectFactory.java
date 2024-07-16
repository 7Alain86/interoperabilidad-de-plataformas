
package paqueteservice;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the paqueteservice package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _Hello_QNAME = new QName("http://paqueteService/", "hello");
    private final static QName _HelloResponse_QNAME = new QName("http://paqueteService/", "helloResponse");
    private final static QName _Perimetro_QNAME = new QName("http://paqueteService/", "perimetro");
    private final static QName _PerimetroResponse_QNAME = new QName("http://paqueteService/", "perimetroResponse");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: paqueteservice
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link PerimetroResponse }
     * 
     */
    public PerimetroResponse createPerimetroResponse() {
        return new PerimetroResponse();
    }

    /**
     * Create an instance of {@link HelloResponse }
     * 
     */
    public HelloResponse createHelloResponse() {
        return new HelloResponse();
    }

    /**
     * Create an instance of {@link Perimetro }
     * 
     */
    public Perimetro createPerimetro() {
        return new Perimetro();
    }

    /**
     * Create an instance of {@link Hello }
     * 
     */
    public Hello createHello() {
        return new Hello();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Hello }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://paqueteService/", name = "hello")
    public JAXBElement<Hello> createHello(Hello value) {
        return new JAXBElement<Hello>(_Hello_QNAME, Hello.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link HelloResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://paqueteService/", name = "helloResponse")
    public JAXBElement<HelloResponse> createHelloResponse(HelloResponse value) {
        return new JAXBElement<HelloResponse>(_HelloResponse_QNAME, HelloResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Perimetro }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://paqueteService/", name = "perimetro")
    public JAXBElement<Perimetro> createPerimetro(Perimetro value) {
        return new JAXBElement<Perimetro>(_Perimetro_QNAME, Perimetro.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link PerimetroResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://paqueteService/", name = "perimetroResponse")
    public JAXBElement<PerimetroResponse> createPerimetroResponse(PerimetroResponse value) {
        return new JAXBElement<PerimetroResponse>(_PerimetroResponse_QNAME, PerimetroResponse.class, null, value);
    }

}
