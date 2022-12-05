import React from 'react'
import './style.css';
import Todoitems from './Todoitems';
const Todo = () => {
    const [val,setvalue] = React.useState('');
    const [item,setItem] = React.useState([]);
    const additem=()=>{
        if(!val){
            alert('please fill data');
        }else{
            setItem([...item,val]);
            setvalue('');
        }
        // return item;
    };
    const del =(elem)=>{
        console.warn(item);
        const updateitem=item.filter((curelem)=>{
            return curelem !== elem;
        });
        setItem(updateitem);
    };
    
    return (
        <>
            <div className='main-div'>
                <div className='child-div'>
                    <figure>
                        <img src='./images/todo.svg' alt='todo' />
                        <figcaption>Add Todo</figcaption>
                    </figure>
                    <div className='addItems'>
                        <input type="text" placeholder='❤ Add' className='form-control'
                        // value={val}
                        onChange={(e)=>{setvalue(e.target.value);}}
                        />
                        <i className='fa fa-plus add-btn' onClick={additem}></i>
                    </div>
                    <div className='showItems'>
                        <Todoitems item={item} del={del} />
                    </div>
                    <div className='showItems'>
                        <button className='btn effect04' data-sm-link-text="Remove All"><span>List Item</span></button>
                    </div>
                </div>
            </div>
        </>
  )
}

export default Todo;