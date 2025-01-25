import axios from "axios";
import { useEffect } from "react";
import { useState } from "react";
import ReactDOM from 'react-dom/client';

export default function useGeoLocation() {
    const [locationData, setLocationData] = useState(null)
    useEffect(() => {
        getLocation();
    }, []);

    async function getLocation() {
        const res = await axios.get("http://ip-api.com/json");
        console.log(res);
        if (res.status === 200)
            setLocationData(res.data)
    }

    return {
        city: locationData?.city,
        country: locationData?.country,
        countryCode: locationData?.countryCode,
        lat: locationData?.lat,
        lon: locationData?.lon,
        region: locationData?.regionName,
        regionCode: locationData?.region,
        timezone: locationData?.timezone,
        zip: locationData?.zip
    }
}
