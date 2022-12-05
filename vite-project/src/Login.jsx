import React,{useEffect, useState} from 'react'
import { useNavigate  } from 'react-router-dom'

const Login = () => {
  const navigate = useNavigate ();
  useEffect(()=>{
    if(localStorage.getItem('userInf')){
      navigate('/products');
    }
  })
  return (
    <div>
        <h1>this is the login page</h1>

    </div>

  )
}

export default Login
