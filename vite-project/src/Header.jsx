import React from 'react'
// import { Nav, Navbar } from 'react-bootstrap'
import { Link } from 'react-router-dom'
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import { useNavigate  } from 'react-router-dom'

const Header = () => {
  const navigate = useNavigate ();
  const userinf = JSON.parse(localStorage.getItem('userInf'));
  var logout=()=>{
    localStorage.clear();
    navigate('/register');
  }
  return (
    <div>
      <Navbar bg="light" expand="lg">
        <Container>
          <Navbar.Brand to='/'>React-Bootstrap</Navbar.Brand>
          <Navbar.Toggle aria-controls="basic-navbar-nav" />
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav className="mr-auto nav_bar_wrapper">
              {
                localStorage.getItem('userInf') ? 
                <>
                  <Link to='/products' className='p-2'>Products</Link>  
                  <NavDropdown title={userinf ? userinf.name : 'User'}>
                  <NavDropdown.Item onClick={logout}>Logout</NavDropdown.Item>
                  </NavDropdown>              
                </>
                :
                <>
                  <Link to='/login' className='p-2'>Login</Link>
                  <Link to='/register' className='p-2'>Register</Link>
                </>
              }
            </Nav>
            {/* <Nav>
            </Nav> */}
          </Navbar.Collapse>
        </Container>
      </Navbar>
        {/* <Navbar bg="dark" variant="dark">
            <Navbar.Brand><Link to='/' className='p-2 text-light'>Brand</Link></Navbar.Brand>
                <Nav className=''>
                    <Link to='/login' className='p-2'>Login</Link>
                    <Link to='/register' className='p-2'>Register</Link>
                </Nav>
        </Navbar> */}
    </div>
  )
}

export default Header