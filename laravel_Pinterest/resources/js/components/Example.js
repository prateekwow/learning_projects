import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import Imageapi from './Imageapi';
import Imgcard from './Imgcard';

function Example() {
    const [imgData,setimg] = useState(Imageapi);
    return (
        <>
            <Imgcard imgData={imgData}/>
            {/* <h1>Test</h1> */}
        </>
    );
}

export default Example;

if (document.getElementById('app')) {
    ReactDOM.render(<Example />, document.getElementById('app'));
}
