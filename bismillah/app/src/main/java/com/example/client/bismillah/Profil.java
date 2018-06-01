package com.example.client.bismillah;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.client.bismillah.chiel.AppController;

import org.json.JSONException;
import org.json.JSONObject;
import java.util.HashMap;
import java.util.Map;

import static com.example.client.bismillah.MainActivity.TAG_USERNAME;
import static com.example.client.bismillah.Res.*;
import static com.example.client.bismillah.login.TAG_ALAMAT;
import static com.example.client.bismillah.login.TAG_EMAIL;
import static com.example.client.bismillah.login.TAG_ID;
import static com.example.client.bismillah.login.TAG_NOHP;
import static com.example.client.bismillah.login.my_shared_preferences;
import static com.example.client.bismillah.login.session_status;

public class Profil extends AppCompatActivity {

    private EditText txt_nama,txt_email,txt_username,txt_alamat,txt_noHP;
    private SharedPreferences sharedpreferences;
    private Boolean session = false;
    private String nama,username,email,alamat,nohp;
    private ProgressDialog pDialog;
    private String url = server.URL + "ubahProfil.php";
    private String TAG;
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";
    private ConnectivityManager conMgr;
    private String tag_json_obj = "json_obj_req";
    private Button ubah,simpan,logout;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_profil);
        getSupportActionBar().setDisplayShowHomeEnabled(true);

        txt_nama = (EditText) findViewById(R.id.txt_nama1);
        txt_username = (EditText) findViewById(R.id.txt_username1);
        txt_email = (EditText) findViewById(R.id.txt_email1);
        txt_alamat = (EditText) findViewById(R.id.txt_alamat1);
        txt_noHP = (EditText) findViewById(R.id.txt_noHP1);
        ubah = (Button)findViewById(R.id.btn_ubah);
        simpan = (Button)findViewById(R.id.btn_simpan);
        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);

        sharedpreferences = getSharedPreferences(my_shared_preferences,Context.MODE_PRIVATE);
        session = sharedpreferences.getBoolean(session_status, false);
        nama = sharedpreferences.getString(TAG_ID, null);
        username = sharedpreferences.getString(TAG_USERNAME, null);
        email = sharedpreferences.getString(TAG_EMAIL, null);
        alamat = sharedpreferences.getString(TAG_ALAMAT, null);
        nohp = sharedpreferences.getString(TAG_NOHP, null);

        txt_nama.setText(nama);
        txt_username.setText(username);
        txt_email.setText(email);
        txt_alamat.setText(alamat);
        txt_noHP.setText(nohp);

    }

    public void ubah(View v){
        txt_nama.setEnabled(true);
        txt_username.setEnabled(true);
        txt_email.setEnabled(true);
        txt_alamat.setEnabled(true);
        txt_noHP.setClickable(true);
        ubah.setText("Batal");
        simpan.setEnabled(true);
        ubah.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                revert();
            }
        });

    }
    public void revert(){

        nama = sharedpreferences.getString(TAG_ID, null);
        username = sharedpreferences.getString(TAG_USERNAME, null);
        email = sharedpreferences.getString(TAG_EMAIL, null);
        alamat = sharedpreferences.getString(TAG_ALAMAT, null);
        nohp = sharedpreferences.getString(TAG_NOHP, null);

        txt_nama.setText(nama);
        txt_username.setText(username);
        txt_email.setText(email);
        txt_alamat.setText(alamat);
        txt_noHP.setText(nohp);


        txt_nama.setEnabled(false);
        txt_username.setEnabled(false);
        txt_email.setEnabled(false);
        txt_alamat.setEnabled(false);
        txt_noHP.setEnabled(false);
        ubah.setText("Ubah");
        ubah.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                ubah(view);
            }
        });
    }

    public void logout (View v){
        new AlertDialog.Builder(this)
                .setTitle("Logout")
                .setMessage("Anda Yakin ?")
                .setPositiveButton("Ya",new DialogInterface.OnClickListener(){
                    @Override
                    public void onClick(DialogInterface dialogInterface,int i){
                        SharedPreferences.Editor editor = sharedpreferences.edit();
                        editor.clear();
                        editor.commit();
                        Intent intent = new Intent(Profil.this, login.class);
                        startActivity(intent);
                        finish();
                    }
                })
                .setNegativeButton("Tidak", null)
                .show();

    }


    public void simpan(View v) {
        String nama = txt_nama.getText().toString();
        String username = txt_username.getText().toString();
        String email = txt_email.getText().toString();
        String alamat = txt_alamat.getText().toString();
        String nohp = txt_noHP.getText().toString();

        if (conMgr.getActiveNetworkInfo() != null
                && conMgr.getActiveNetworkInfo().isAvailable()
                && conMgr.getActiveNetworkInfo().isConnected()) {
            konek(this.username,nama,username,email,alamat,nohp);


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

    private void konek (final String usernameOld,final String nama,final String username,final String email,final String alamat,final String nohp) {
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

                    // Check for error node in json
                    if (success == 1) {

                        Log.e("Simpan berhasil", jObj.toString());

                        SharedPreferences.Editor editor = sharedpreferences.edit();
                        editor.putString(TAG_ID, nama);
                        editor.putString(TAG_USERNAME, username);
                        editor.putString(TAG_EMAIL, email);
                        editor.putString(TAG_ALAMAT, alamat);
                        editor.putString(TAG_NOHP, nohp);
                        editor.commit();

                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                        revert();

                    } else {
                        Toast.makeText(getApplicationContext(),
                                jObj.getString(TAG_MESSAGE), Toast.LENGTH_LONG).show();

                    }
                } catch (JSONException e) {

                    // JSON error
                    Toast.makeText(getApplicationContext(),"JSON ERROR "+e,Toast.LENGTH_SHORT).show();
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
                params.put("usernameOld",usernameOld);
                params.put("nama", nama);
                params.put("username", username);
                params.put("email", email);
                params.put("alamat", alamat);
                params.put("telp",nohp);

                return params;
            }

        };

        // Adding request to request queue

        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()){
            case android.R.id.home : finish();
                break;
        }
        return true;
    }
}

