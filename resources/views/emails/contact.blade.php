<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nuevo Mensaje de Contacto</title>
    </head>
    <body>
        <h2>Nuevo Mensaje de Contacto</h2>
        <p><strong>Nombre:</strong> {{ $contact->fullname }}</p>
        <p><strong>Correo:</strong> {{ $contact->email }}</p>
        <p><strong>Teléfono:</strong> {{ $contact->phonenumber }}</p>
        <p><strong>Comentario:</strong> {{ $contact->comment ?? 'Sin comentario' }}</p>
    </body>
</html>
