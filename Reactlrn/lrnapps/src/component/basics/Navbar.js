import React from 'react'
import Menu from './menuapi.js';
const Navbar = (props) => {
    // const getItems=(category)=>{
    //     const itemList = Menu.filter((curelement)=>{
    //       return curelement.category === category;
    //     });
    //     // console.log(itemList);
    //     setMenu(itemList);
    //   }
    // console.log(props.unItems);
  return (
    <>
        <nav className="navbar">
            <div className="btn-group">
              {props.unItems.map((curelem)=>{
                return(
                  <button className="btn-group__item" onClick={()=>props.getItem(curelem)}>{curelem}</button>
                  );
                })}
                {/* <button className="btn-group__item" onClick={()=>props.getItem('all')}>All</button> */}
            {/* <button className="btn-group__item" onClick={()=>props.getItem("breakfast")}>breakfast</button>
            <button className="btn-group__item" onClick={()=>props.getItem("lunch")}>Lunch</button>
            <button className="btn-group__item" onClick={()=>props.getItem("evening")}>Evening</button>
            <button className="btn-group__item" onClick={()=>props.getItem("dinner")}>Dinner</button> */}
            </div>
        </nav>
    </>
  )
}

export default Navbar;