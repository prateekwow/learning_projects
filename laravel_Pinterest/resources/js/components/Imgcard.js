import React from 'react';

const Imgcard = (props) => {
  return (
    <>
      {props.imgData.map((curelem)=>{
        return(
          <div className="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div className="image card-body">
              <img
                src={curelem.src}
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds"
              />
              <div className="middle">
                  <div className="text">{curelem.name}</div>
              </div>
            </div>            
          </div>
        );
      })}
    </>
  )
}

export default Imgcard;