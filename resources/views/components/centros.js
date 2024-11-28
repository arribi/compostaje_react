import React, { useEffect, useState } from 'react';

const Centros = () => {
  const [centros, setCentros] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    // Hacer la solicitud GET al backend para obtener los centros
    fetch('/api/centros')
      .then(response => response.json())
      .then(data => {
        setCentros(data);
        setLoading(false);
      })
      .catch(error => {
        console.error('Error al obtener los centros:', error);
        setLoading(false);
      });
  }, []);

  if (loading) {
    return <div>Cargando centros...</div>;
  }

  return (
    <div>
      <h1>Centros</h1>
      <ul>
        {centros.map(centro => (
          <li key={centro.id}>{centro.nombre}</li>
        ))}
      </ul>
    </div>
  );
};

export default Centros;
