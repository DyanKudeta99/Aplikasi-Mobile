package com.example.sam_madura.servis;


import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.sam_madura.servis.controler.AppController;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

import static com.example.sam_madura.servis.login.TAG_ID_USER;
import static com.example.sam_madura.servis.login.my_shared_preferences;


public class ActivityServiceTuneUp extends AppCompatActivity {

    private SharedPreferences sharedpreferences;
    private Boolean session = false;
    private String id,nopol,hargaT,serviceT;
    private ProgressDialog pDialog;
    private String url = server.URL + "Servicetuneup.php";
    private String TAG;
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";
    private static final String TAG_SERVICET = "servicet";
    private static final String TAG_HARGAT = "hargat";
    private static final String TAG_NOPOL = "telp";
    private ConnectivityManager conMgr;
    private String tag_json_obj = "json_obj_req";

    ListView lst;
    String[] nama = {"Pemeriksaan Fungsi Pengereman","Pemeriksaan Fungsi Roda","Pemeriksaan Oli","Pemeriksaan baud dan mur","Pembersihan Karbulator","Pemeriksaan dan pengisian air radiator","Pembersihan Busi"};
    Integer[] imgid={R.drawable.black1,R.drawable.black2,R.drawable.black3,R.drawable.black4,R.drawable.black5,R.drawable.black6,R.drawable.black7};

    private TextView tvServiceT,tvHargaT;
    private Button service;
    private int id_booking;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_service_tune_up);

        tvServiceT = (TextView) findViewById(R.id.tvserviceT);
        tvHargaT= (TextView) findViewById(R.id.tvhargaT);
        service = (Button)findViewById(R.id.btntuneup);

        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);

        sharedpreferences = getSharedPreferences(my_shared_preferences, Context.MODE_PRIVATE);
        id = sharedpreferences.getString(TAG_ID_USER, null);
        id_booking = sharedpreferences.getInt("id_booking", 0);
        nopol = sharedpreferences.getString(TAG_NOPOL, null);
        //serviceP = sharedpreferences.getString(TAG_SERVICEP, null);
        //hargaP = sharedpreferences.getString(TAG_HARGAP, null);

        tvServiceT.setText("Service TuneUp");
        tvHargaT.setText("Rp.90.000");

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle("SERVICE");
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        lst= (ListView) findViewById(R.id.listtuneup);
        Custom customListView= new Custom(this, nama,imgid);
        lst.setAdapter(customListView);

    }
    public void service(View v) {
        String serviceT = tvServiceT.getText().toString();
        String hargaT = tvHargaT.getText().toString();


        if (conMgr.getActiveNetworkInfo() != null
                && conMgr.getActiveNetworkInfo().isAvailable()
                && conMgr.getActiveNetworkInfo().isConnected()) {
            konekP(id_booking+"",id,nopol,serviceT,hargaT);


        } else {
            Toast.makeText(getApplicationContext(), "No Internet Connection", Toast.LENGTH_SHORT).show();
        }
    }
    private void showDialog() {
        if (!pDialog.isShowing())
            pDialog.show();
    }

    private void hideDialog() {
        if (pDialog.isShowing())
            pDialog.dismiss();

    }

    private void konekP (final String id_booking,final String id,final String nopol, final String serviceT,  final String hargaT) {
        pDialog = new ProgressDialog(this);
        pDialog.setCancelable(false);
        pDialog.setMessage("Sedang menyimpan ...");
        showDialog();

        StringRequest strReq = new StringRequest(Request.Method.POST, url, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.e(TAG, "Register Response: " + response.toString());
                hideDialog();

                try {
                    JSONObject jObj = new JSONObject(response);
                    int success = jObj.getInt(TAG_SUCCESS);
                    // int id_booking = jObj.getInt("id_booking");
                    //antrian.setText(id_booking+"");


                    // Check for error node in json
                    if (success == 1) {

                        Log.e("Simpan berhasil", jObj.toString());

                        SharedPreferences.Editor editor = sharedpreferences.edit();
                        editor.putString(TAG_SERVICET,serviceT );
                        editor.putString(TAG_HARGAT, hargaT);

                        editor.commit();

                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();



                    } else {
                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                    }
                } catch (JSONException e) {

                    // JSON error
                    Toast.makeText(getApplicationContext(),"JSON ERROR "+e, Toast.LENGTH_SHORT).show();
                    e.printStackTrace();
                }

            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e(TAG, "Simpan Error: " + error.getMessage());
                Toast.makeText(getApplicationContext(),
                        error.getMessage()+"Tidak ada respon", Toast.LENGTH_LONG).show();

                hideDialog();

            }
        }) {

            @Override
            protected Map<String, String> getParams() {
                // Posting parameters to login url
                Map<String, String> params = new HashMap<String, String>();
                params.put("id_booking", id_booking);
                params.put("id", id);
                params.put("nopol", nopol);
                params.put("serviceT", serviceT);
                params.put("hargaT", hargaT);

                return params;
            }

        };

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //tombolBack
        finish();
        return super.onOptionsItemSelected(item);
    }
}