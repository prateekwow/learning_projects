import React from 'react'
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';

const Form = () => {
  return (
    <form>
        <div className="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" name="name" className="form-control" id="name" placeholder="Name" />
        </div>
        <div className="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" className="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" />
            <small id="email" className="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div className="form-group">
            <label for="type">Type</label>
            <select className="form-control" id="type" name="type" placeholder="Password" >
                <option value="0">Admin</option>
                <option value="1">User</option>
            </select>
        </div>
        <div className="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" id="password" className="form-control" placeholder="Password" />
        </div>
        <div className="form-check">
            <input type="checkbox" className="form-check-input" id="exampleCheck1" />
            <label className="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" className="btn btn-primary">Submit</button>
    </form>
  )
}

export default Form