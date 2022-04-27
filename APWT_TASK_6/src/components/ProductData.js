import React from 'react';
import { NavLink as Link } from 'react-router-dom';

const ProductData = (props) => {
    const {id,name,price}=props.products
    return (
        <Link to ={"/Productlist/"+id} className="Productlist">
            <p>{name}</p>
            <p>{price}</p>
        </Link>
    );
};

export default ProductData;