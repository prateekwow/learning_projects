import {useState} from 'react';
import logo from './logo.svg';
import './App.css';

function App() {
  const [data,setData] = useState('test'+0);
  var func1 = ()=>{
    setData(data + 1);
  }
  return (
    <div className="App">
      <h1>{data}</h1>
      <button onClick={func1}>click</button>
    </div>
  );
}
export default App;
