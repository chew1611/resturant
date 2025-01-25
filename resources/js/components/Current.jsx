import React from 'react';
import MyLocation from './MyLocation';
import ReactDOM from 'react-dom/client';
function Current() {
  return (
    <div className="App">
      <MyLocation />
    </div>
  );
}

export default Current;


if (document.getElementById('example1')) {
    const Index = ReactDOM.createRoot(document.getElementById("example1"));

    Index.render(
        <React.StrictMode>
            <Current/>
        </React.StrictMode>
    )
}
