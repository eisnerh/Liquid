package com.example.ace.liquid;

import android.annotation.TargetApi;
import android.icu.text.SimpleDateFormat;
import android.icu.util.Calendar;
import android.os.Build;
import android.os.Bundle;
import android.support.annotation.RequiresApi;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.Date;
import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

    public Button btnHEA, btnHED, btnHIC, btnHSA, btnGuardar;
    public EditText etChofer, etGuia, etChequeador, etCamion;
    public String FechaActual, HSA, HEA, HIC, HED;
    public int horaFinal, HoraInicio;
    public Calendar c;

    RequestQueue requestQueue;
    String insertUrl = "https://tryliquidaciones.000webhostapp.com/testing/insertLiquidar.php";

    @RequiresApi(api = Build.VERSION_CODES.N)
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        c = Calendar.getInstance();
        System.out.println("Current time => "+c.getTime());

        requestQueue = Volley.newRequestQueue(getApplicationContext());

        btnHEA = (Button) findViewById(R.id.btnHEA);
        btnHED = (Button) findViewById(R.id.btnHED);
        btnHIC = (Button) findViewById(R.id.btnHIC);
        btnHSA = (Button) findViewById(R.id.btnHSA);
        etChofer = (EditText) findViewById(R.id.etChofer);
        etGuia = (EditText) findViewById(R.id.etGuia);
        etChequeador = (EditText) findViewById(R.id.editText4);
        etCamion = (EditText) findViewById(R.id.etCamion);

        final TextView tvHEA = (TextView) findViewById(R.id.tvHEA);
        final TextView tvHED = (TextView) findViewById(R.id.tvHED);
        final TextView tvHIC = (TextView) findViewById(R.id.tvHIC);
        final TextView tvHSA = (TextView) findViewById(R.id.tvHSA);
        final TextView tvFA = (TextView) findViewById(R.id.tvFechaA);
        // Boton Hora Entrada al Almacen
        btnHEA.setOnClickListener(new View.OnClickListener() {
            @TargetApi(Build.VERSION_CODES.N)
            @Override
            public void onClick(View view) {
                HEA = getHoraActual();
                tvHEA.setText(HEA);
            }
        });
        // Boton Hora Entrada al Deposito
        btnHED.setOnClickListener(new View.OnClickListener() {
            @TargetApi(Build.VERSION_CODES.N)
            @Override
            public void onClick(View view) {
                HED = getHoraActual();
                tvHED.setText(HED);
                FechaActual = getFechaActual();
                tvFA.setText(FechaActual);

                Calendar antes = Calendar.getInstance();
                HoraInicio = antes.get(Calendar.MINUTE);
                Toast.makeText(getApplicationContext(), Integer.toString(HoraInicio), Toast.LENGTH_LONG).show();
            }
        });
        // Boton Hora Inicio Chequeo
        btnHIC.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                HIC = getHoraActual();
                tvHIC.setText(HIC);
            }
        });
        // Boton Hora Salida Almacen
        btnHSA.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                HSA = getHoraActual();
                tvHSA.setText(HSA);

                Calendar ahora = Calendar.getInstance();
                horaFinal = ahora.get(Calendar.MINUTE);

                Toast.makeText(getApplicationContext(), "Tiempo Esperado: " + Integer.toString(horaFinal - HoraInicio), Toast.LENGTH_LONG).show();
            }
        });
        btnGuardar = (Button) findViewById(R.id.btnGuardar);

        btnGuardar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                StringRequest request = new StringRequest(Request.Method.POST, insertUrl, new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {

                        System.out.println(response);
                    }
                }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                    }
                }) {

                    @Override
                    protected Map<String, String> getParams() throws AuthFailureError {

                        /*`id_liquidar`,
                        `n_Guia`,
                        `chofer`,
                        `camion`,
                        `chequeador`,
                        `fecha`,
                        `hora_llegada`,
                        `hora_entr_almacen`,
                        `hora_inicio_chequeo`,
                        `hora_salida_almacen`*/

                        Map<String,String> parameters  = new HashMap<>();
                        parameters.put("n_Guia",etGuia.getText().toString());
                        parameters.put("chofer",etChofer.getText().toString());
                        parameters.put("camion",etCamion.getText().toString());
                        parameters.put("chequeador",etChequeador.getText().toString());
                        parameters.put("fecha",tvFA.getText().toString());
                        parameters.put("hora_llegada",tvHED.getText().toString());
                        parameters.put("hora_entr_almacen",tvHEA.getText().toString());
                        parameters.put("hora_inicio_chequeo",tvHIC.getText().toString());
                        parameters.put("hora_salida_almacen",tvHSA.getText().toString());


                        return parameters;
                    }
                };
                requestQueue.add(request);
            }

        });
    }

    @RequiresApi(api = Build.VERSION_CODES.N)
    public static String getHoraActual() {
        Date ahora = new Date();
        SimpleDateFormat formateador = new SimpleDateFormat("hh:mm:ss");
        return formateador.format(ahora);
    }

    //Metodo usado para obtener la fecha actual
    //@return Retorna un <b>STRING</b> con la fecha actual formato "dd-MM-yyyy"
    @RequiresApi(api = Build.VERSION_CODES.N)
    public static String getFechaActual() {
        Date ahora = new Date();
        SimpleDateFormat formateador = new SimpleDateFormat("dd-MM-yyyy");
        return formateador.format(ahora);
    }

}
