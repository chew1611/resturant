import React, { useState, useEffect } from "react";
import useGeoLocation from "./useGeoLocation";
import ReactDOM from 'react-dom/client';

 function UserLocation() {
    const { city, lat, lon } = useGeoLocation();

    return (
        <div>
            <p>City: {city}</p>
            <p>Latitude: {lat}</p>
            <p>Longitude: {lon}</p>
           
        </div>
    );

    
}
export default UserLocation;
if (document.getElementById('example2')) {
    const Index = ReactDOM.createRoot(document.getElementById("example2"));

    Index.render(
        <React.StrictMode>
            <UserLocation/>
        </React.StrictMode>
    )
}
