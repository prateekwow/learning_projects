import React,{useEffect, useState} from 'react'
import { useNavigate  } from 'react-router-dom'
import axios from "axios";

const Register = () => {
  const navigate = useNavigate ();
  useEffect(()=>{
    if(localStorage.getItem('userInf')){
      navigate('/products');
    }
  })
  const [name,setName]=useState('');
  const [email,setEmail]=useState('');
  const [type,setType]=useState('');
  const [password,setPassword]=useState('');

  function signup(){
    console.warn({name,email,type,password});
    // var bodyFormData = new FormData();
    // console.warn(bodyFormData);
    const url = 'http://localhost:8000/api/register'
    const data = {
      'name': name,
      'email': email,
      'type': type,
      'password': password,
    };
    var data1 = axios
      .post(url, data, {
        headers: {
          'crossDomain': true,
          'Access-Control-Allow-Origin': '*',
          'Content-Type': 'application/json',
          'Access-Control-Allow-Methods': 'POST',
        },
      })
      .then(({data}) => {
        // console.log(data);
        localStorage.setItem('userInf',JSON.stringify(data));
        navigate('/products');
    });
  }
  return (
    <>
      <h1>Register</h1>
      <div className="p-5 text-start">
          <div className="className py-2">
              <label>Name</label>
              <input type="text" name="name" className="form-control" id="name" onChange={(e)=>setName(e.target.value)} placeholder="Name" />
          </div>
          <div className="className py-2">
              <label>Email address</label>
              <input type="email" name="email" onChange={(e)=>setEmail(e.target.value)} className="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" />
              <small id="email" className="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div className="className py-2">
              <label>Type</label>
              <select className="form-control" id="type" name="type" onChange={(e)=>setType(e.target.value)} placeholder="Password" >
                  <option value="">--Choose option--</option>
                  <option value="0">Admin</option>
                  <option value="1">User</option>
              </select>
          </div>
          <div className="className py-2">
              <label>Password</label>
              <input type="password" name="password" id="password" className="form-control" onChange={(e)=>setPassword(e.target.value)} placeholder="Password" />
          </div>
          {/* <div className="form-check">
              <input type="checkbox" className="form-check-input" id="exampleCheck1" />
              <label className="form-check-label">Check me out</label>
          </div> */}
          <button type="submit" onClick={signup} className="btn btn-primary">Submit</button>
      </div>
    </>
  )
}

export default Register