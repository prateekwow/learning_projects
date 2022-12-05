import './App.css';
// import 'bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Header from './Header';
import Register from './Register';
import Login from './login';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
      <Header />
      
      <Routes>
      <Route path="/login" element={<Login />} />
      <Route path="/" element={<h1>Test</h1>} />
      <Route path="/register" element={<Register />} />
      </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
