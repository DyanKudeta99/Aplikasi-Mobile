package com.example.sam_madura.servicemobile;

import android.content.Context;
import android.content.Intent;
import android.graphics.ColorSpace;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;
import java.util.Locale;

public class ListViewAdapter extends BaseAdapter{

    Context mContext;
    LayoutInflater inflater;
    List<ModelListView> modelListViews;
    ArrayList<ModelListView> arrayList;

    //constructor
    public ListViewAdapter(Context context, List<ModelListView> modellist) {
        mContext = context;
        this.modelListViews = modellist;
        inflater = LayoutInflater.from(mContext);
        this.arrayList = new ArrayList<ModelListView>();
        this.arrayList.addAll(modellist);
    }
    public class ViewHolder {
        TextView mTitleTv, mDescTv;
        ImageView mIconIv;
    }

        @Override
    public int getCount() {
        return modelListViews.size();
    }

    @Override
    public Object getItem(int i) {
        return modelListViews.get(i);
    }

    @Override
    public long getItemId(int i) {
        return i;
    }

    @Override
    public View getView(final int postition, View view, ViewGroup parent) {
        ViewHolder holder;
        if (view==null){
            holder = new ViewHolder();
            view = inflater.inflate(R.layout.rowview, null);

            //locate the views in row.xml
            holder.mTitleTv = view.findViewById(R.id.mainTitle);
            holder.mDescTv = view.findViewById(R.id.mainDesc);
            holder.mIconIv = view.findViewById(R.id.mainIcon);

            view.setTag(holder);

        }
        else {
            holder = (ViewHolder)view.getTag();
        }
        //set the results into textviews
        holder.mTitleTv.setText(modelListViews.get(postition).getTitle());
        holder.mDescTv.setText(modelListViews.get(postition).getDesc());
        //set the result in imageview
        holder.mIconIv.setImageResource(modelListViews.get(postition).getIcon());

        //listview item clicks
        view.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //code later
                if (modelListViews.get(postition).getTitle().equals("Battery")){
                    //start NewActivity with title for actionbar and text for textview
                    Intent intent = new Intent(mContext, NewActivityListView.class);
                    intent.putExtra("actionBarTitle", "Battery");
                    intent.putExtra("contentTv", "This is Battery detail...");
                    mContext.startActivity(intent);
                }
                if (modelListViews.get(postition).getTitle().equals("Cpu")){
                    //start NewActivity with title for actionbar and text for textview
                    Intent intent = new Intent(mContext, NewActivityListView.class);
                    intent.putExtra("actionBarTitle", "Cpu");
                    intent.putExtra("contentTv", "This is Cpu detail...");
                    mContext.startActivity(intent);
                }
                if (modelListViews.get(postition).getTitle().equals("Display")){
                    //start NewActivity with title for actionbar and text for textview
                    Intent intent = new Intent(mContext, NewActivityListView.class);
                    intent.putExtra("actionBarTitle", "Display");
                    intent.putExtra("contentTv", "This is Display detail...");
                    mContext.startActivity(intent);
                }
                if (modelListViews.get(postition).getTitle().equals("Memory")){
                    //start NewActivity with title for actionbar and text for textview
                    Intent intent = new Intent(mContext, NewActivityListView.class);
                    intent.putExtra("actionBarTitle", "Memory");
                    intent.putExtra("contentTv", "This is Memory detail...");
                    mContext.startActivity(intent);
                }
                if (modelListViews.get(postition).getTitle().equals("Sensor")){
                    //start NewActivity with title for actionbar and text for textview
                    Intent intent = new Intent(mContext, NewActivityListView.class);
                    intent.putExtra("actionBarTitle", "Sensor");
                    intent.putExtra("contentTv", "This is Sensor detail...");
                    mContext.startActivity(intent);
                }
            }
        });


        return view;
    }

    //filter
    public void filter(String charText){
        charText = charText.toLowerCase(Locale.getDefault());
        modelListViews.clear();
        if (charText.length()==0){
            modelListViews.addAll(arrayList);
        }
        else {
            for (ModelListView model : arrayList){
                if (model.getTitle().toLowerCase(Locale.getDefault())
                        .contains(charText)){
                    modelListViews.add(model);
                }
            }
        }
        notifyDataSetChanged();
    }

}
