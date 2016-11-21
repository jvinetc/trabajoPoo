/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entidades.DetalleMovimiento;
import java.util.List;
import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.TypedQuery;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

/**
 *
 * @author Julian
 */
@Stateless
@Path("entidades.detallemovimiento")
public class DetalleMovimientoFacadeREST extends AbstractFacade<DetalleMovimiento> {

    @PersistenceContext(unitName = "VehiculosCVPU")
    private EntityManager em;

    public DetalleMovimientoFacadeREST() {
        super(DetalleMovimiento.class);
    }

    @POST
    @Override
    @Consumes({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public boolean create(DetalleMovimiento entity) {
        return super.create(entity);
    }

    @PUT
    @Path("{id}")
    @Consumes({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public boolean edit(@PathParam("id") Integer id, DetalleMovimiento entity) {
        return super.edit(entity);
    }

    @DELETE
    @Path("{id}")
    public boolean remove(@PathParam("id") Integer id) {
        return super.remove(super.find(id));
    }

    @GET
    @Path("{id}")
    @Produces({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public DetalleMovimiento find(@PathParam("id") Integer id) {
        return super.find(id);
    }

    @GET
    @Override
    @Produces({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public List<DetalleMovimiento> findAll() {
        return super.findAll();
    }

    @GET
    @Path("{from}/{to}")
    @Produces({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public List<DetalleMovimiento> findRange(@PathParam("from") Integer from, @PathParam("to") Integer to) {
        return super.findRange(new int[]{from, to});
    }

    @GET
    @Path("count")
    @Produces(MediaType.TEXT_PLAIN)
    public String countREST() {
        return String.valueOf(super.count());
    }
    
    @GET
    @Path("porId/{id}")
    @Produces({MediaType.APPLICATION_XML, MediaType.APPLICATION_JSON})
    public List<DetalleMovimiento> buscaIdMovimiento(@PathParam("id") Integer id) {
        TypedQuery<DetalleMovimiento> query= em.createNamedQuery("DetalleMovimiento.findIdMov",DetalleMovimiento.class);
        query.setParameter("idMovimiento",id);
        return query.getResultList();
    }
    
    @Override
    protected EntityManager getEntityManager() {
        return em;
    }
    
}
