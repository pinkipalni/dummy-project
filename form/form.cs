using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Affiliate
{
    #region Form
    public class Form
    {
        #region Member Variables
        protected int _id;
        protected string _image;
        protected string _vender;
        protected string _category;
        protected string _sku;
        protected string _color;
        protected string _inventory;
        protected string _tp;
        protected string _mrp;
        protected string _size;
        #endregion
        #region Constructors
        public Form() { }
        public Form(string image, string vender, string category, string sku, string color, string inventory, string tp, string mrp, string size)
        {
            this._image=image;
            this._vender=vender;
            this._category=category;
            this._sku=sku;
            this._color=color;
            this._inventory=inventory;
            this._tp=tp;
            this._mrp=mrp;
            this._size=size;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        public virtual string Vender
        {
            get {return _vender;}
            set {_vender=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Sku
        {
            get {return _sku;}
            set {_sku=value;}
        }
        public virtual string Color
        {
            get {return _color;}
            set {_color=value;}
        }
        public virtual string Inventory
        {
            get {return _inventory;}
            set {_inventory=value;}
        }
        public virtual string Tp
        {
            get {return _tp;}
            set {_tp=value;}
        }
        public virtual string Mrp
        {
            get {return _mrp;}
            set {_mrp=value;}
        }
        public virtual string Size
        {
            get {return _size;}
            set {_size=value;}
        }
        #endregion
    }
    #endregion
}