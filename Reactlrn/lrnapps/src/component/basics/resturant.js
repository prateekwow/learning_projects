import React, { useState } from 'react'
import './style.css';
import Menu from './menuapi.js';
import Menucard from './Menucard';
import Navbar from './Navbar';


const unavItem =(arr)=>{
  var arr1 = [];
  for(let i=0;i<arr.length;i++){
    if(arr1.length==0){
      arr1[0] = arr[0];
      // console.log(arr1);
      // console.log(arr[i]);
    }else{
      for(let j=0;j<arr1.length;j++){
        if(arr[i]==arr1[j]){
          break
        }else if(j==arr1.length-1){
          arr1[j+1] = arr[i];
        }
      }
    }
  }
  arr1[arr1.length]='all';
  return arr1;
}

const Resturant = () => {
  const [menuData,setMenu] = useState(Menu);
  // const [navData,setNav] = useState(unItem);

  const getItems=(category)=>{
    if(category!='all'){
      const itemList = Menu.filter((curelement)=>{
        return curelement.category === category;
      });
      setMenu(itemList);
    } else{
      setMenu(Menu);
    }
  } 
  const navItem = Menu.map((curelem)=>{
    return curelem.category;
  });

  const unItem  = unavItem(navItem);

  return (
    <>
    <Navbar getItem={getItems} unItems={unItem} />
      <Menucard menuData={menuData} />
    </>
  );
}

export default Resturant;