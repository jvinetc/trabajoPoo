/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entidades;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author Julian
 */
@Entity
@Table(name = "detalle_movimiento")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "DetalleMovimiento.findAll", query = "SELECT d FROM DetalleMovimiento d"),
    @NamedQuery(name = "DetalleMovimiento.findIdMov", query = "SELECT d FROM DetalleMovimiento d WHERE d.idMovimiento.idMovimiento =  :idMovimiento")})
public class DetalleMovimiento implements Serializable {

    @JoinColumn(name = "id_articulo", referencedColumnName = "id_producto")
    @ManyToOne
    private Productos idArticulo;

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "id_detalle")
    private Integer idDetalle;
    @Column(name = "precio")
    private Integer precio;
    @Column(name = "cantidad")
    private Integer cantidad;
    @JoinColumn(name = "id_movimiento", referencedColumnName = "id_movimiento")
    @ManyToOne
    private Movimiento idMovimiento;

    public DetalleMovimiento() {
    }

    public DetalleMovimiento(Integer idDetalle) {
        this.idDetalle = idDetalle;
    }

    public Integer getIdDetalle() {
        return idDetalle;
    }

    public void setIdDetalle(Integer idDetalle) {
        this.idDetalle = idDetalle;
    }

    public Integer getPrecio() {
        return precio;
    }

    public void setPrecio(Integer precio) {
        this.precio = precio;
    }

    public Integer getCantidad() {
        return cantidad;
    }

    public void setCantidad(Integer cantidad) {
        this.cantidad = cantidad;
    }

    public Movimiento getIdMovimiento() {
        return idMovimiento;
    }

    public void setIdMovimiento(Movimiento idMovimiento) {
        this.idMovimiento = idMovimiento;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idDetalle != null ? idDetalle.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof DetalleMovimiento)) {
            return false;
        }
        DetalleMovimiento other = (DetalleMovimiento) object;
        if ((this.idDetalle == null && other.idDetalle != null) || (this.idDetalle != null && !this.idDetalle.equals(other.idDetalle))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Entidades.DetalleMovimiento[ idDetalle=" + idDetalle + " ]";
    }

    public Productos getIdArticulo() {
        return idArticulo;
    }

    public void setIdArticulo(Productos idArticulo) {
        this.idArticulo = idArticulo;
    }

}
