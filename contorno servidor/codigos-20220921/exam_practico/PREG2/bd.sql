CREATE DATABASE mensaxes;
USE mensaxes;
CREATE TABLE `grupos` (
`codGrupo` int(11) NOT NULL,
`nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
INSERT INTO `grupos` (`codGrupo`, `nombre`) VALUES
(1, 'Informática'),
(2, 'Tecnología'),
(3, 'Sistemas Electrónicos');
CREATE TABLE `mensajes` (
`codMensaje` int(11) NOT NULL,
`mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
`usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
`codGrupo` int(11) DEFAULT NULL,
`fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
CREATE TABLE `usuarios` (
`usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
`password` char(128) COLLATE utf8_spanish_ci NOT NULL,
`codGrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
INSERT INTO `usuarios` (`usuario`, `password`, `codGrupo`) VALUES
('david', '4E5FB359B9FD8A1C1AE85E431936D3FC80CC4C917620162D0FD1930C47BB0CD8D7424C99E6C88B6E09D406F8BE2C51B17EECF460A2FFB2CFC8C6994C9B4D90FB', 1),
('maria', '4E5FB359B9FD8A1C1AE85E431936D3FC80CC4C917620162D0FD1930C47BB0CD8D7424C99E6C88B6E09D406F8BE2C51B17EECF460A2FFB2CFC8C6994C9B4D90FB', 2),
('pepe', '4E5FB359B9FD8A1C1AE85E431936D3FC80CC4C917620162D0FD1930C47BB0CD8D7424C99E6C88B6E09D406F8BE2C51B17EECF460A2FFB2CFC8C6994C9B4D90FB', 1);
ALTER TABLE `grupos` ADD PRIMARY KEY (`codGrupo`);
ALTER TABLE `mensajes`
ADD PRIMARY KEY (`codMensaje`),
ADD KEY `usuario` (`usuario`),
ADD KEY `codGrupo` (`codGrupo`);
ALTER TABLE `usuarios`
ADD PRIMARY KEY (`usuario`),
ADD KEY `codGrupo` (`codGrupo`);
ALTER TABLE `grupos` MODIFY `codGrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `mensajes` MODIFY `codMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
ALTER TABLE `mensajes`
ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON
DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `mensajes_ibfk_2` FOREIGN KEY (`codGrupo`) REFERENCES `grupos` (`codGrupo`);
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codGrupo`) REFERENCES `grupos` (`codGrupo`);