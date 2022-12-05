import React,{useEffect} from 'react'
import { useNavigate  } from 'react-router-dom'

const Addproducts = () => {
    const navigate = useNavigate ();
    useEffect(()=>{
      if(!localStorage.getItem('userInf')){
        navigate('/login');
      }
    })
  return (
    <div>Addproducts</div>
  )
}

export default Addproducts