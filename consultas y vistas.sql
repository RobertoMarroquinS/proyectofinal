CREATE VIEW	vw_usuarios AS (
SELECT usuarios.*, tipos_usuarios.nombre AS tipo_usuario, almacenes.nombre AS nombre_almacen	
FROM usuarios INNER JOIN tipos_usuarios ON usuarios.id_tipo_usuario= tipos_usuarios.id_tipo_usuario
INNER	JOIN	almacenes ON almacenes.id_almacen= usuarios.id_almacen
);

CREATE VIEW vw_almacenes AS(
SELECT almacenes.id_almacen, tipos_almacenes.nombre AS tipo_almacen, almacenes.nombre, almacenes.direccion, almacenes.telefono, almacenes.email
FROM almacenes INNER JOIN tipos_almacenes ON	almacenes.id_tipo_almacen= tipos_almacenes.id_tipo_almacen
);

CREATE VIEW vw_productos AS(
SELECT productos.id_producto, tipos_productos.nombre AS tipo_producto, productos.nombre,productos.descripcion, productos.precio_unidad
FROM productos INNER JOIN tipos_productos ON productos.id_tipo_producto= tipos_productos.id_tipo_producto
);

CREATE VIEW vw_inventarios AS(
SELECT inventarios.id_inventario, productos.nombre AS	nombre_producto, almacenes.nombre AS nombre_almacen,inventarios.cantidad_existencia,inventarios.fecha,inventarios.precio
FROM	inventarios INNER JOIN productos ON inventarios.id_producto= productos.id_producto
INNER JOIN almacenes ON inventarios.id_almacen= almacenes.id_almacen
);

CREATE VIEW vw_venta AS	(
SELECT venta.id_venta, clientes.nombre AS nombre_cliente, usuarios.nombre AS nombre_usuario, venta.fecha, venta.no_factura
FROM venta INNER JOIN	clientes ON venta.id_cliente= clientes.id_cliente
INNER JOIN usuarios ON venta.id_usuario= usuarios.id_usuario
);

CREATE VIEW vw_traslado AS (
SELECT traslado.id_traslado, traslado.fecha, traslado.id_inventario, almacenes.nombre AS nombre_almacen,traslado.cantidad, usuarios.nombre AS nombre_usuario
FROM traslado INNER JOIN almacenes ON traslado.id_almacen= almacenes.id_almacen
INNER JOIN	usuarios ON traslado.id_usuario=usuarios.id_usuario
);