<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $reservation?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido" class="form-label">{{ __('Apellido') }}</label>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $reservation?->apellido) }}" id="apellido" placeholder="Apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dni" class="form-label">{{ __('Dni') }}</label>
            <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" value="{{ old('dni', $reservation?->dni) }}" id="dni" placeholder="Dni">
            {!! $errors->first('dni', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_vuelo" class="form-label">{{ __('Codigo Vuelo "Recuerde que la reservacon requiere un minimo de 1 semana con anteracion" ') }}</label>
            <select name="codigo_vuelo" class="form-control @error('codigo_vuelo') is-invalid @enderror" id="codigo_vuelo">
                <option value="" disabled selected>Seleccione un vuelo</option>
                <option value="A231" {{ old('codigo_vuelo', $reservation?->codigo_vuelo) == 'A231' ? 'selected' : '' }}>
                    A231 "Mañana de 5:00 a 11:30"
                </option>
                <option value="P431" {{ old('codigo_vuelo', $reservation?->codigo_vuelo) == 'P431' ? 'selected' : '' }}>
                    P431 "Tarde de 1:30 a 5:30"
                </option>
                <option value="K824" {{ old('codigo_vuelo', $reservation?->codigo_vuelo) == 'K824' ? 'selected' : '' }}>
                    K824 "Noche de 7:30 a 12:30"
                </option>
            </select>
            {!! $errors->first('codigo_vuelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="origen" class="form-label">{{ __('Origen') }}</label>
            <select name="origen" class="form-control @error('origen') is-invalid @enderror" id="origen">
                <option value="" disabled selected>Seleccione un origen</option>
                <option value="Lima, Perú (LIM)" {{ old('origen', $reservation?->origen) == 'Lima, Perú (LIM)' ? 'selected' : '' }}>
                    Lima, Perú (LIM)
                </option>
                <option value="Cusco, Perú (CUZ)" {{ old('origen', $reservation?->origen) == 'Cusco, Perú (CUZ)' ? 'selected' : '' }}>
                    Cusco, Perú (CUZ)
                </option>
                <option value="Arequipa, Perú (AQP)" {{ old('origen', $reservation?->origen) == 'Arequipa, Perú (AQP)' ? 'selected' : '' }}>
                    Arequipa, Perú (AQP)
                </option>
                <option value="Trujillo, Perú (TRU)" {{ old('origen', $reservation?->origen) == 'Trujillo, Perú (TRU)' ? 'selected' : '' }}>
                    Trujillo, Perú (TRU)
                </option>
                <option value="Piura, Perú (PIU)" {{ old('origen', $reservation?->origen) == 'Piura, Perú (PIU)' ? 'selected' : '' }}>
                    Piura, Perú (PIU)
                </option>
                <option value="Iquitos, Perú (IQT)" {{ old('origen', $reservation?->origen) == 'Iquitos, Perú (IQT)' ? 'selected' : '' }}>
                    Iquitos, Perú (IQT)
                </option>
                <option value="Chiclayo, Perú (CIX)" {{ old('origen', $reservation?->origen) == 'Chiclayo, Perú (CIX)' ? 'selected' : '' }}>
                    Chiclayo, Perú (CIX)
                </option>
                <option value="Tarapoto, Perú (TPP)" {{ old('origen', $reservation?->origen) == 'Tarapoto, Perú (TPP)' ? 'selected' : '' }}>
                    Tarapoto, Perú (TPP)
                </option>
                <option value="Juliaca, Perú (JUL)" {{ old('origen', $reservation?->origen) == 'Juliaca, Perú (JUL)' ? 'selected' : '' }}>
                    Juliaca, Perú (JUL)
                </option>
                <option value="Pucallpa, Perú (PCL)" {{ old('origen', $reservation?->origen) == 'Pucallpa, Perú (PCL)' ? 'selected' : '' }}>
                    Pucallpa, Perú (PCL)
                </option>
                <option value="Tacna, Perú (TCQ)" {{ old('origen', $reservation?->origen) == 'Tacna, Perú (TCQ)' ? 'selected' : '' }}>
                    Tacna, Perú (TCQ)
                </option>
            </select>
            {!! $errors->first('origen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="destino" class="form-label">{{ __('Destino') }}</label>
            <select name="destino" class="form-control @error('destino') is-invalid @enderror" id="destino">
                <option value="" disabled selected>Seleccione un destino</option>
                <option value="Ciudad de México, México (MEX)" {{ old('destino', $reservation?->destino) == 'Ciudad de México, México (MEX)' ? 'selected' : '' }}>
                    Ciudad de México, México (MEX)
                </option>
                <option value="Madrid, España (MAD)" {{ old('destino', $reservation?->destino) == 'Madrid, España (MAD)' ? 'selected' : '' }}>
                    Madrid, España (MAD)
                </option>
                <option value="Buenos Aires, Argentina (EZE)" {{ old('destino', $reservation?->destino) == 'Buenos Aires, Argentina (EZE)' ? 'selected' : '' }}>
                    Buenos Aires, Argentina (EZE)
                </option>
                <option value="Bogotá, Colombia (BOG)" {{ old('destino', $reservation?->destino) == 'Bogotá, Colombia (BOG)' ? 'selected' : '' }}>
                    Bogotá, Colombia (BOG)
                </option>
                <option value="Santiago, Chile (SCL)" {{ old('destino', $reservation?->destino) == 'Santiago, Chile (SCL)' ? 'selected' : '' }}>
                    Santiago, Chile (SCL)
                </option>
                <option value="São Paulo, Brasil (GRU)" {{ old('destino', $reservation?->destino) == 'São Paulo, Brasil (GRU)' ? 'selected' : '' }}>
                    São Paulo, Brasil (GRU)
                </option>
                <option value="París, Francia (CDG)" {{ old('destino', $reservation?->destino) == 'París, Francia (CDG)' ? 'selected' : '' }}>
                    París, Francia (CDG)
                </option>
                <option value="Londres, Reino Unido (LHR)" {{ old('destino', $reservation?->destino) == 'Londres, Reino Unido (LHR)' ? 'selected' : '' }}>
                    Londres, Reino Unido (LHR)
                </option>
                <option value="Nueva York, Estados Unidos (JFK)" {{ old('destino', $reservation?->destino) == 'Nueva York, Estados Unidos (JFK)' ? 'selected' : '' }}>
                    Nueva York, Estados Unidos (JFK)
                </option>
                <option value="Tokio, Japón (NRT)" {{ old('destino', $reservation?->destino) == 'Tokio, Japón (NRT)' ? 'selected' : '' }}>
                    Tokio, Japón (NRT)
                </option>
            </select>
            {!! $errors->first('destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="numero_asiento" class="form-label">{{ __('Número Asiento ("Nuestros aviones tienen un límite de 189 pasajeros")') }}</label>
            <select name="numero_asiento" class="form-control @error('numero_asiento') is-invalid @enderror" id="numero_asiento">
                <option value="" disabled selected>Seleccione un número de asiento</option>

                <!-- Primera Clase (1-63) -->
                @for ($i = 1; $i <= 63; $i++)
                    <option value="{{ $i }}" {{ old('numero_asiento', $reservation?->numero_asiento) == $i ? 'selected' : '' }}>
                        {{ $i }} - Primera Clase
                    </option>
                @endfor

                <!-- Clase Común (64-126) -->
                @for ($i = 64; $i <= 126; $i++)
                    <option value="{{ $i }}" {{ old('numero_asiento', $reservation?->numero_asiento) == $i ? 'selected' : '' }}>
                        {{ $i }} - Clase Común
                    </option>
                @endfor

                <!-- Clase Económica (127-189) -->
                @for ($i = 127; $i <= 189; $i++)
                    <option value="{{ $i }}" {{ old('numero_asiento', $reservation?->numero_asiento) == $i ? 'selected' : '' }}>
                        {{ $i }} - Clase Económica
                    </option>
                @endfor
            </select>
            {!! $errors->first('numero_asiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        <div class="form-group mb-2 mb20">
            <label for="fecha_vuelo" class="form-label">{{ __('Fecha Vuelo') }}</label>
            <input type="date" name="fecha_vuelo" class="form-control @error('fecha_vuelo') is-invalid @enderror" value="{{ old('fecha_vuelo', $reservation?->fecha_vuelo) }}" id="fecha_vuelo" placeholder="Fecha Vuelo">
            {!! $errors->first('fecha_vuelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="hora_salida" class="form-label">{{ __('Hora Salida "Dependiendo de su eleccion ejemplo: si usted eligio de las 5:00 a 11:30el vuelo salgra a las 12:30 con una hora para avordar"') }}</label>
            <input type="time" name="hora_salida" class="form-control @error('hora_salida') is-invalid @enderror" value="{{ old('hora_salida', $reservation?->hora_salida) }}" id="hora_salida" placeholder="Hora Salida">
            {!! $errors->first('hora_salida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        <div class="form-group mb-2 mb20">
            <label for="hora_llegada" class="form-label">{{ __('Hora Llegada"Son aproximadamente 12 horas"') }}</label>
            <input type="time" name="hora_llegada" class="form-control @error('hora_llegada') is-invalid @enderror" value="{{ old('hora_llegada', $reservation?->hora_llegada) }}" id="hora_llegada" placeholder="Hora Llegada">
            {!! $errors->first('hora_llegada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <select name="precio" class="form-control @error('precio') is-invalid @enderror" id="precio">
                <option value="" disabled selected>Seleccione una clase</option>

                <!-- Clase Premium -->
                <option value="12000" {{ old('precio', $reservation?->precio) == 12000 ? 'selected' : '' }}>
                    12,000 - Clase Premium
                </option>

                <!-- Clase Común -->
                <option value="6000" {{ old('precio', $reservation?->precio) == 6000 ? 'selected' : '' }}>
                    6,000 - Clase Común
                </option>

                <!-- Clase Económica -->
                <option value="2000" {{ old('precio', $reservation?->precio) == 2000 ? 'selected' : '' }}>
                    2,000 - Clase Económica
                </option>
            </select>
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $reservation?->estado ?: 'Confirmada') }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $reservation?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $reservation?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notas" class="form-label">{{ __('Notas') }}</label>
            <input type="text" name="notas" class="form-control @error('notas') is-invalid @enderror" value="{{ old('notas', $reservation?->notas) }}" id="notas" placeholder="Notas">
            {!! $errors->first('notas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $reservation?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>