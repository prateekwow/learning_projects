import React from 'react';

const Menucard = (props) => {
  return (
    <section className="main-card--cointainer">
      {props.menuData.map((curelem)=>{
        return(
          <div className="card-container">
            <div className="card">
              <div className="card-body">
                <span className="card-number card-circle subtle">{curelem.id}</span>
                <span className='card-author subtle'>{curelem.category}</span>
                <h2 className='card-title'>Joota with {curelem.name}</h2>
                <span className='card-description subtle'>
                  {curelem.description}
                </span>
                <div className="card-read">Read</div>
              </div>
              <img src={curelem.image} alt="img" className='card-media'/>
              <span className="card-tag subtle">Order Now</span>
            </div>
          </div>
        );
      })}
    </section>
    
  )
}

export default Menucard;