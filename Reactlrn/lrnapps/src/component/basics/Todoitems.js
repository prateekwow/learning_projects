import React from 'react'

const Todoitems = (props) => {
//   const del =(elem)=>{
//     const updateitem=props.item.filter((curelem)=>{
//         return curelem !== elem;
//     });
//     props.setItem(updateitem);
// };
  if(props.item){
    return (
      <>
        {props.item.map((curelem,i)=>{
          return(
              <div className='eachItem'>
              <h3>{curelem}</h3>
              <div className='todo-btn'>
                  <i className='far fa-edit add-btn'></i>
                  <i className='far fa-trash-alt add-btn' onClick={()=>props.del(curelem)}></i>
              </div>
              </div>
          );
          })}
      </>
    )
  } else{
    return(
      <>
      </>
    )
  }
}

export default Todoitems