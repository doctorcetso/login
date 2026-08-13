-- TABLA
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_documento INT(12) NOT NULL,
    numero_documento VARCHAR(20) NOT NULL UNIQUE,
    nombres_completos VARCHAR(150) NOT NULL,
    correo_electronico VARCHAR(150) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- Longitud recomendada para contraseñas encriptadas (ej: password_hash en PHP)
    perfil VARCHAR(10) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;