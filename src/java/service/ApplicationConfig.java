/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import java.util.Set;
import javax.ws.rs.core.Application;

/**
 *
 * @author Natalia
 */
@javax.ws.rs.ApplicationPath("webresources")
public class ApplicationConfig extends Application {

    @Override
    public Set<Class<?>> getClasses() {
        Set<Class<?>> resources = new java.util.HashSet<>();
        addRestResourceClasses(resources);
        return resources;
    }

    /**
     * Do not modify addRestResourceClasses() method.
     * It is automatically populated with
     * all resources defined in the project.
     * If required, comment out calling this method in getClasses().
     */
    private void addRestResourceClasses(Set<Class<?>> resources) {
        resources.add(service.BodegaFacadeREST.class);
        resources.add(service.ClientesFacadeREST.class);
        resources.add(service.DetalleMovimientoFacadeREST.class);
        resources.add(service.MovimientoFacadeREST.class);
        resources.add(service.ProductosFacadeREST.class);
        resources.add(service.ProveedorFacadeREST.class);
        resources.add(service.UsuariosFacadeREST.class);
    }
    
}
