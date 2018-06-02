package com.example.sam_madura.servis;

import android.app.ActionBar;
import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.ConnectivityManager;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.MenuItem;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.os.Bundle;
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

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;

import butterknife.BindView;

import static com.example.sam_madura.servis.login.TAG_ALAMAT;
import static com.example.sam_madura.servis.login.TAG_EMAIL;
import static com.example.sam_madura.servis.login.TAG_ID;
import static com.example.sam_madura.servis.login.TAG_ID_USER;
import static com.example.sam_madura.servis.login.TAG_NOHP;
import static com.example.sam_madura.servis.login.TAG_USERNAME;
import static com.example.sam_madura.servis.login.my_shared_preferences;
import static com.example.sam_madura.servis.login.session_status;

public class Pemesanan extends AppCompatActivity {

    private SharedPreferences sharedpreferences;
    private Boolean session = false;
    private String id, nama,nopol,jk;
    private ProgressDialog pDialog;
    private String url = server.URL + "pemesanan.php";
    private String TAG;
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";
    private static final String TAG_NOPOL = "telp";
    private static final String TAG_JK = "jk";
    private ConnectivityManager conMgr;
    private String tag_json_obj = "json_obj_req";


    private EditText inputNama,inputNopol,inputJk;
    private TextView hasilNama,hasilNik,hasilUmur,hasilAlamat,hasilNopol,hasilJenis;

    @BindView(R.id.input_id)
    EditText input_Id;
    @BindView(R.id.input_nama)
    EditText input_Nama;
    @BindView(R.id.input_nopol)
    EditText input_Nopol;
    @BindView(R.id.input_jk)
    EditText input_Jk;

    @BindView(R.id.simpan_button)
    Button simpan_button;

    @BindView(R.id.hasil_id)
    TextView hasil_Id;
    @BindView(R.id.hasil_nama)
    TextView hasil_Nama;
    @BindView(R.id.hasil_nopol)
    TextView hasil_Nopol;
    @BindView(R.id.hasil_jk)
    TextView hasil_Jk;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pemesanan);
        ButterKnife.bind(this);

        conMgr = (ConnectivityManager) getSystemService(Context.CONNECTIVITY_SERVICE);

        sharedpreferences = getSharedPreferences(my_shared_preferences, Context.MODE_PRIVATE);
        session = sharedpreferences.getBoolean(session_status, false);
        id = sharedpreferences.getString(TAG_ID_USER, null);
        nama = sharedpreferences.getString(TAG_ID, null);
        nopol = sharedpreferences.getString(TAG_NOPOL, null);
        jk = sharedpreferences.getString(TAG_JK, null);

        input_Id.setText(id);
        input_Nama.setText(nama);
        input_Nopol.setText(nopol);
        input_Jk.setText(jk);

        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
    }



    @OnClick(R.id.simpan_button)
        public void btnClicked () {
            String id = input_Id.getText().toString();
            hasil_Id.setText(id);
            String nama = input_Nama.getText().toString();
            hasil_Nama.setText(nama);
            String nopol = input_Nopol.getText().toString();
            hasil_Nopol.setText(nopol);
            String jk = input_Jk.getText().toString();
            hasil_Jk.setText(jk);

        if (conMgr.getActiveNetworkInfo() != null
                && conMgr.getActiveNetworkInfo().isAvailable()
                && conMgr.getActiveNetworkInfo().isConnected()) {
            konek(id,nama,nopol,jk);


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
    private void konek (final String id, final String nama, final String nopol, final String jk) {
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
                        editor.putString(TAG_ID_USER, id);
                        editor.putString(TAG_ID, nama);
                        editor.putString(TAG_NOPOL, nopol);
                        editor.putString(TAG_JK, jk);

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
                params.put("id", id);
                params.put("nama", nama);
                params.put("nopol", nopol);
                params.put("jk", jk);

                return params;
            }

        };

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        //tombolBack
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == android.R.id.home) {
            Intent intent = new Intent(Pemesanan.this, ActivityHome.class);
            startActivity(intent);
            this.finish();
        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    public void onBackPressed() {
        Intent intent = new Intent(Pemesanan.this, ActivityHome.class);
        startActivity(intent);
        finish();
    }
}

