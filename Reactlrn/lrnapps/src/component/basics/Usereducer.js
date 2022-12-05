import React from 'react'

const reducer = (state,action)=>{
    switch(action.type) {
        case 'incr':
            return state += 1;
        case 'decr':
            if(state>0){
                return state -= 1;
            } else {
                return state=0;
            }
        default:
            return state;      
    }
}
const Usereducer = () => {
    // const [mno,setno]=React.useState(10);
    const [state,dispatch] = React.useReducer(reducer,10);
    return (
      <>
        <div classNAme="center_div">
            <p>{state}</p>
            <div className='button2' onMouseOver={()=>dispatch({type:'incr'})}>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Incr
            </div>
            {/* <div className='button2' onMouseOver={()=>{if(mno!=0){setno(mno-1);}}}> */}
            <div className='button2' onMouseOver={()=>dispatch({type:'decr'})}>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Decr
            </div>
        </div>
      </>
  )
}

export default Usereducer;