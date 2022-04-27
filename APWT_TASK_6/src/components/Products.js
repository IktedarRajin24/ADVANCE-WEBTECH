import React, {useState, useEffect} from "react";
import axios from "axios";

const Products = (props) =>{
    const[products, setProducts] = useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/Product/productList")
        .then(resp=>{
        console.log(resp.data);
        setProducts(resp.data);
         }).catch(err=>{
        console.log(err);
    });
    },[]);
        
    return(
        <div>
            <h1>All Products</h1>
            <ul>
                {
                    products.map(p=>(
                        <li key={p.id}>{p.name}</li>
                    ))
                }
            </ul>
        </div>
    )
}
export default Products;