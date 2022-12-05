import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter, Route, Router, Routes } from 'react-router-dom';
import Header from './Header';
import Register from './Register';
import Login from './Login';
import Addproducts from './addproducts';
import Protected from './Protected';

function App() {
  return (
    <div className="">
      <BrowserRouter>
      {/* <Router> */}
      <Header />
      <Routes>
      
      <Route path="/" element={<h1>Test</h1>} />
      <Route path="/products" element={<Protected Cmp={Addproducts} />} />
      <Route path="/login" element={<Login />} />
      <Route path="/register" element={<Register />} />
      </Routes>
      {/* </Router> */}
      </BrowserRouter>
    </div>
  );
}

export default App;
