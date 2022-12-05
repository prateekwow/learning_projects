import React from 'react'

const Useeffect = () => {
    const [mno,setno]=React.useState(10);
    React.useEffect(()=>{
        document.title = `counts(${mno})`;
    });
  return (
    <>
        <div classNAme="center_div">
            <p>{mno}</p>
            <div className='button2' onMouseOver={()=>setno(mno+1)}>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Incr
            </div>
            {/* <div className='button2' onMouseOver={()=>{if(mno!=0){setno(mno-1);}}}> */}
            {/* <div className='button2' onMouseOver={()=>mno>0?setno(mno-1):setno(0)}>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Decr
            </div> */}
        </div>
    </>
  )
}

export default Useeffect;