import React,{useEffect} from 'react'
import { useNavigate  } from 'react-router-dom'

const Protected = (props) => {
    var Component = props.Cmp;
    const navigate = useNavigate();
    useEffect(()=>{
      if(!localStorage.getItem('userInf')){
        navigate('/login');
      }
    })
    return (
        <div>
            <Component />
        </div>
    )
}

export default Protected